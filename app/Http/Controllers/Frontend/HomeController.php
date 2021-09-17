<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Inform;

class HomeController extends Controller
{

   public function index()
   {
   	$products=Product::orderBy('id','desc')->paginate(16);
   	return view('frontend.home',compact('products'));
   }
   
   public function productShow($id)
   {
    $product=Product::find($id);
    $products=Product::orderBy('id','desc')->where('id','!=',$id)->take(3)->get();
    return view('frontend.product',compact('product','products'));
   }
   
    public function data()
   {
      return view('frontend.inform');
   }
     public function create()
    {
      return view('frontend.inform');
    }
      public function store(Request $request)
    {   
  
      Inform::create([
        'problem'=>$request->input('problem'),
        'email'=>$request->input('email'),
      ]);
      
      return redirect()->route('inform.data');
    }

       public function search(Request $request)
    {
      if($request->isMethod('post'))
      {
         $name=$request->get('name');
         $products=Product::where('name','LIKE','%'.$name.'%')->paginate(5);
      }
      return view('frontend.home',compact('products'));

     
    }


}
