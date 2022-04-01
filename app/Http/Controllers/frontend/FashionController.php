<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FashionController extends Controller
{
    public function fashion(){
        return view("pages.fashion");
    }
}
