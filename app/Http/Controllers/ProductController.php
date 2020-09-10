<?php

namespace App\Http\Controllers;

use App\Category;
use App\Components\GetCategory;
use App\Product;
use App\ProductImage;
use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    private $product;
    public function __construct(Product $product)
    {
        $this->middleware('auth:admin');
        $this->product = $product;
    }

    public function getProductType($id)
    {
        $product_type = ProductType::with(['specifications',
            'filters' => function ($query) {
                return $query->with('filter_options');
            },
        ])->find($id);
        return $product_type;
    }

    public function index()
    {
        $list_product_type = ProductType::all();
        $list_product = $this->product->get();
        return view('admin.product.index', compact('list_product_type', 'list_product'));
    }

    public function create(Request $request)
    {
        $product_type = $this->getProductType($request->product_type_id);
        $get_category = new GetCategory(Category::all());
        $list_category = $get_category->getChildrenCategory();
        return view('admin.product.create', compact('product_type', 'list_category'));
    }

    public function store(Request $request)
    {
        $product_type = $this->getProductType($request->product_type_id);
        $request_specs = $request->spec;
        $specifications = array();
        foreach ($product_type->specifications as $key => $spec) {
            $specifications[$spec->id] = $request_specs[$key];
        };
        $product = $this->product->create([
            'admin_id' => Auth::id(),
            'category_id' => $request->category_id,
            'product_type_id' => $request->product_type_id,
            'code' => $request->code,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'price' => $request->price,
            'discount' => $request->discount,
            'description' => $request->description,
            'quality' => $request->quality,
            'warranty' => $request->warranty,
            'view' => 0,
            'hot' => 0,
            'image' => Storage::url($request->file('image')->store('public/product')),
            'specifications' => json_encode($specifications),
        ]);
        $files = $request->file('image_detail');
        if ($request->hasFile('image_detail')) {
            foreach ($files as $file) {
                $path = Storage::url($request->file('image')->store('public/product'));
                $product_image = ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $path,
                ]);
            }
        };
        $product->filter_options()->attach($request->filter);
        return redirect()->route('products.index')->with('status', 'Thêm sản phẩm thành công');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
