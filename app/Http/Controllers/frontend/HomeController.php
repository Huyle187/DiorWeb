<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home(){
        $list_cart = \Cart::getContent();
        return view("pages.home",compact('list_cart'));
    }
}
