<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
   public function index()
   {
   	$customers=user::where('role','customer')->orderBy('id','desc')->paginate(5);
   	return view('backend.customers.index', compact('customers'));
   }
   public function edit($id)
   {
   	$customer=User::find($id);
   	return view('backend.customers.edit',compact('customer'));
   }
   public function update(Request $request,$id)
   {
   	$customer=User::find($id);
   	$data=[
     'name'=>$request->input('name'),
     'email'=>$request->input('email'),
     'phone'=>$request->input('phone'),
     'address'=>$request->input('address'),
   	];
   	$customer->update($data);
   	return redirect()->route('admin.customer');
   }

   public function delete($id)
   {
   	$customer=User::find($id);
   	$customer->delete();
   	return redirect()->back();
   }
}

