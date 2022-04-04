<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{

    public function index(){
        $list_cart = \Cart::getContent();
        return view("pages.home",compact('list_cart'));
        // return view("components.side-panel-overplay",compact('list_cart'));
    }

    public function addcart($id)
    {
        $product = Product::find($id);

        $cartitem = array(
            'id' => $id,
            'name' => $product->tensanpham,
            'price' => $product->giaban,
            'quantity' => 1,
            'attributes' => array('img'=>$product->hinhanh)
        );
        \Cart::add($cartitem);
        return redirect()->back();
    }

    public function updatecart(Request $request)
    {
        $list_quantity = $request->quantity;
        $list_cart = \Cart::getContent();
        $i = 0;
        foreach ($list_cart as $value) {
            \Cart::update($value->id, array(
                'quantity' => array('relative' => false,'value' => $list_quantity[$i])
            ));
            $i++;
        }
        return redirect()->back();
    }

    public function delcart($id=null)
    {
        if($id != null)
        {
            \Cart::remove($id);
        }
        return redirect()->back();
    }
}
