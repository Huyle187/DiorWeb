<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;


class CollectionController extends Controller
{
    public function collection(Request $request,$type,$colID){
        $search = $request->input('searchCollection');
        $list = Product::where('maloaihang','=',(int)($colID))
                        ->where('collectionID','=',(int)($type))
                        ->select('*')->orderby('masanpham')->search()->Paginate(6);
        $list_cart = \Cart::getContent();
        return view("pages.collection",compact('list','search','list_cart'));
    }
}
