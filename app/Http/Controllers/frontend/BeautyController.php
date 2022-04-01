<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BeautyController extends Controller
{
    public function beauty(){
        return view("pages.beauty");
    }
}
