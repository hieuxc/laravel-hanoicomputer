<?php

namespace App\Http\Controllers;

use App\Category;
use App\Components\GetCategory;
use App\Product;
use App\ProductType;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($key, Request $request)
    {
        $category = Category::whereSlug($key)->first();
        $product = Product::whereSlug($key)->first();
        if ($category != null) {
            $product_type = ProductType::with([
                'filters' => function ($query) {
                    return $query->with('filter_options');
                }])->find($category->product_type_id);
            $get_category = new GetCategory(Category::all());
            $id_descendants_category = $get_category->getDescendantsOfCategory($category->id);
            $list_children_category = $get_category->getChildrenCategory($category->id);
            $query = $request->query();
            $query_filter = array();
            foreach ($product_type->filters as $filter) {
                if (isset($query[$filter->slug])) {
                    foreach ($filter->filter_options as $filter_option) {
                        if ($query[$filter->slug] == $filter_option->slug) {
                            array_push($query_filter, $filter_option->id);
                            break;
                        }
                    }
                }
            }
            

            $list_product = Product::whereIn('category_id', $id_descendants_category);
            foreach ($query_filter as $qf) {
                $list_product->whereHas('filter_options', function(Builder $query) use ($qf){
                    $query->where('filter_option_id', $qf);
                });
            }
            
            $list_product = $list_product->get();
            $list_product_id = array();
            foreach ($list_product as $product) {
                array_push($list_product_id, $product->id);
            }

            $product_type = ProductType::with([
                'filters' => function ($query) use ($list_product_id){
                    return $query->with(['filter_options' => function ($query) use ($list_product_id) {
                        return $query->withCount(['products' => function(Builder $query) use ($list_product_id){
                            $query->whereIn('product_id',$list_product_id);
                        }]);
                    }]);
                }])->find($category->product_type_id);

            return view('front-end.product-category', compact('category', 'list_children_category', 'product_type', 'list_product'));
        } else
        if ($product != null) {
            $product = Product::with(['product_images', 'category'])->find($product->id);
            $product_type = ProductType::with('specifications')->find($product->product_type_id);
            return view('front-end.product-detail', compact('product', 'product_type'));
        } else {
            return redirect('/');
        }
    }
}
