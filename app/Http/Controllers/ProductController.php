<?php

namespace App\Http\Controllers;

use App\Category;
use App\Components\GetCategory;
use App\Product;
use App\ProductImage;
use App\ProductType;
use App\FilterOption;
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
        $list_category = $get_category->getDescendantsCategory();
        return view('admin.product.create', compact('product_type', 'list_category'));
    }

    public function store(Request $request)
    {
        dd($request);
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
            'specifications' => $specifications,
        ]);
        $files = $request->file('image_detail');
        if ($request->hasFile('image_detail')) {
            foreach ($files as $file) {
                $path = Storage::url($file->store('public/product'));
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
        // $products = $this->product->get();
        // foreach ($products as $product) {
        //     $lf = array();
        //     $p = $product->discount / 1000000;
        //     if ($p < 10) {
        //         array_push($lf, '1');
        //     } else if ($p >= 10 && $p < 15) {
        //         array_push($lf, '2');
        //     }else if ($p >= 15 && $p < 20) {
        //         array_push($lf, '3');
        //     }else if ($p >= 20 && $p < 25) {
        //         array_push($lf, '4');
        //     }else if ($p >= 25 && $p < 30) {
        //         array_push($lf, '5');
        //     }else if ($p >= 30 && $p < 35) {
        //         array_push($lf, '6');
        //     }else if ($p >= 35 && $p < 40) {
        //         array_push($lf, '7');
        //     }else if ($p >= 40 && $p < 45) {
        //         array_push($lf, '8');
        //     }else if ($p >= 45 && $p < 50) {
        //         array_push($lf, '9');
        //     }else if ($p >= 50 && $p < 60) {
        //         array_push($lf, '10');
        //     }else if ($p >= 60 && $p < 70) {
        //         array_push($lf, '11');
        //     }else if ($p >= 70 && $p < 80) {
        //         array_push($lf, '12');
        //     }else{
        //         array_push($lf, '13');
        //     }

        //     for($i=2; $i<=11;$i++){
        //         $fo = FilterOption::select('id')->where('filter_id', $i)->get();
        //         $id = array();
        //         foreach ($fo as $key => $f) {
        //             array_push($id, $f->id);
        //         }
        //         $val = rand(reset($id), end($id));
        //         array_push($lf, (string)$val);
        //     }
        //     $product->filter_options()->attach($lf);
        // }
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
