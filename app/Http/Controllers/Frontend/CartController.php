<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Session;

class CartController extends Controller
{
    public function cart($id)
    {
    	$product=Product::find($id);
    	$cart=session()->has('cart') ? session()->get('cart'):[];
    	if(array_key_exists($product->id, $cart)){
        $cart[$product->id]['quantity'] += 1;
    	}else{

    	$cart[$product->id]=[

    	'product_id'=>$product->id,
    	'name'=>$product->name,
    	'price'=>$product->price,
    	'quantity'=>1,
    	'photo'=>$product->photo

    	];

    	}

    session(['cart'=>$cart]);
    return redirect()->back();
     }

     public function showcart()
     {
     
     	   $cart=session()->has('cart') ? session()->get('cart'):[];
           return view('frontend.cart',compact('cart'));
     }

     static function cartItem()
     {
        $userId=Session::get('user')['id'];
        return Product::where('user_id',$userId)->count();
     }
     public function delete($id)
     {
        Product::delete($id);
        return redirect('cart');
     }
}