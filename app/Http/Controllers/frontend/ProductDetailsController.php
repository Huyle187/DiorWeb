<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductDetailsController extends Controller
{
    public function productDetails(){
        return view("pages.product-details");
    }
}
