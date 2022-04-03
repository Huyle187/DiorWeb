<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductDetailsController extends Controller
{
    public function productDetails($id){
        $product = Product::find($id);
        $list_cart = \Cart::getContent();
        return view("pages.product-details",compact('list_cart','product'));
    }
}
