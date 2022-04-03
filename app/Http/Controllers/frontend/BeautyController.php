<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BeautyController extends Controller
{
    public function beauty(){
        $list_cart = \Cart::getContent();
        return view("pages.beauty",compact('list_cart'));
    }
}
