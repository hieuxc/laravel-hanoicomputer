<?php
namespace App;

class Cart
{
    public $product_cart = [];
    public $total_quality = 0;
    public $total_price = 0;
    public function __construct($old_cart)
    {
        if ($old_cart) {
            $this->product_cart = $old_cart->product_cart;
            $this->total_quality = $old_cart->total_quality;
            $this->total_price = $old_cart->total_price;
        }
    }

    public function add($product, $id)
    {
        $product_info = ['product' => $product, 'quality' => 0, 'price' => $product->discount];
        if ($this->product_cart != []) {
            if (array_key_exists($id, $this->product_cart)) {
                $product_info = $this->product_cart[$id];
            }
        }
        $product_info['quality']++;
        $product_info['price'] = $product->discount * $product_info['quality'];
        $this->product_cart[$id] = $product_info;
        $this->total_quality ++;
        $this->total_price += $product->discount;
    }
}
