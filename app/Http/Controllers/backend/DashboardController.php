<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    public function Index()
    {
        $list = Product::where('trangthai','!=',0)->orderby('masanpham')->search()->Paginate(15);
        return view('backend.dashboard.index',compact('list'));
    }
}
