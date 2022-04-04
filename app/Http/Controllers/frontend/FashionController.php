<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Collection;
use App\Models\ProductType;

class FashionController extends Controller
{
    public function fashion(){
        $collection = Collection::join('typeproducts','collections.typeproduct','=','typeproducts.id')
                                ->select('*','collections.id','typeproducts.tenloaihang','collections.typeproduct')
                                ->get();
        $list_cart = \Cart::getContent();
        return view("pages.fashion",compact('list_cart','collection'));
    }

    public function women($type)
    {
        $collection = Collection::join('typeproducts','collections.typeproduct','=','typeproducts.id')
                                ->select('*','collections.id','typeproducts.tenloaihang','collections.typeproduct')
                                ->where('collections.typeproduct','=',(int)$type)
                                ->get();
        $list_cart = \Cart::getContent();
        return view("pages.fashion",compact('list_cart','collection'));
    }
    public function men($type)
    {
        $collection = Collection::join('typeproducts','collections.typeproduct','=','typeproducts.id')
                                ->select('*','collections.id','typeproducts.tenloaihang','collections.typeproduct')
                                ->where('collections.typeproduct','=',(int)$type)
                                ->get();
        $list_cart = \Cart::getContent();
        return view("pages.fashion",compact('list_cart','collection'));
    }
    public function kid($type)
    {
        $collection = Collection::join('typeproducts','collections.typeproduct','=','typeproducts.id')
                                ->select('*','collections.id','typeproducts.tenloaihang','collections.typeproduct')
                                ->where('collections.typeproduct','=',(int)$type)
                                ->get();
        $list_cart = \Cart::getContent();
        return view("pages.fashion",compact('list_cart','collection'));
    }
}
