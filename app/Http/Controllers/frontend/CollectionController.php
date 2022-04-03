<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;


class CollectionController extends Controller
{
    public function collection(Request $request){
        $search = $request->input('searchCollection');
        $list = Product::where('trangthai','!=',0)->orderby('masanpham')->search()->Paginate(6);
        $list_cart = \Cart::getContent();
        return view("pages.collection",compact('list','search','list_cart'));
    }
}
