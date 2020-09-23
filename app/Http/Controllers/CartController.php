<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    public function index(){
        $cart= Session::get('cart');
        // dd($cart);
        return view('front-end.cart', compact('cart'));
    }
    public function add(Request $request, $product_id)
    {
        $product = Product::findOrFail($product_id);
        $old_cart = Session::get('cart') ?? null;
        $cart = new Cart($old_cart);
        $cart->add($product, $product_id);
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }
}
