<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FashionController extends Controller
{
    public function fashion(){
        $list_cart = \Cart::getContent();
        return view("pages.fashion",compact('list_cart'));
    }
}
