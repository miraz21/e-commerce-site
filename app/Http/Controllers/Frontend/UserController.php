<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function profile()
    {
        $orders=Order::where('user_id',auth()->user()->id)->with('order_details')->orderBy('id','desc')->get();
        return view('frontend.profile',compact('orders'));
    }
    public function updateProfile(Request $request)
    {
        try{
        $request->validate([
        'name'=>'required',
        'phone'=>'required',
        'address'=>'required',
        'email'=>'required|unique:users,email,'.auth()->user()->id,

        ]);
            $photo=$request->file('photo');
            if($photo){
                if(file_exists('upload/users/'.auth()->user()->photo)){
                    unlink('upload/users/'.auth()->user()->photo);
                }
                $newName='user'.time(). '.' .$photo->getclientoriginalExtension();
                $request->photo->move('upload/users',$newName);
                auth()->user()->update(['photo'=>$newName]);
            }
        $data=[
        'name'=>$request->input('name'),
        'phone'=>$request->input('phone'),
        'address'=>$request->input('address'),
        'email'=>$request->input('email'),
       
        ];
        auth()->user()->update($data);
        return redirect()->back();

        }catch(\Exception $exception){
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }
    
    public function registration()
    {
    return view('frontend.registration');
    }
    public function doRegistration(Request $request)
    {
    	$request->validate([
        'name'=>'required',
        'phone'=>'required',
        'address'=>'required',
        'email'=>'required|unique:users,email',
        'password'=>'required|confirmed|min:3',
    	]);

    	$data=[
        'name'=>$request->input('name'),
        'phone'=>$request->input('phone'),
        'address'=>$request->input('address'),
        'email'=>$request->input('email'),
        'password'=>Hash::make($request->input('password')),
        'role'=>'customer',
    	];

    	User::create($data);
    	return redirect()->route('home');
    }
    public function login()
    {
    	return view('frontend.login');
    }
    public function doLogin(Request $request)
    {
    	$cred=$request->only('email','password');
    	if(\auth()->attempt($cred)){
    		if(auth()->user()->role=='admin'){
    			return redirect()->route('dashboard');
    		}
    		return redirect()->route('home');
    	}
    	return redirect()->back();
    }
    public function logout()
    {
    	auth()->logout();
    	return redirect()->route('home');
    }

    }
