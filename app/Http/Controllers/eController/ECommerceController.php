<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ECommerceController extends Controller
{
    public function ecommerce_dashboard()
    {
        return view('pages.ecommerce-dashboard');
    }
    public function ecommerce_products()
    {
        return view('pages.ecommerce-products');
    }
    public function ecommerce_product_details()
    {
        return view('pages.ecommerce-product-details');
    }
    public function ecommerce_cart()
    {
        return view('pages.ecommerce-cart');
    }
    public function ecommerce_checkout()
    {
        return view('pages.ecommerce-checkout');
    }
    public function ecommerce_orders()
    {
        return view('pages.ecommerce-orders');
    }
    public function ecommerce_account()
    {
        return view('pages.ecommerce-account');
    }
    public function ecommerce_addproduct()
    {
        return view('pages.ecommerce-addproduct');
    }
    public function ecommerce_wishlist()
    {
        return view('pages.ecommerce-wishlist');
    }
}
