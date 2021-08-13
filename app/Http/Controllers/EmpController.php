<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class EmpController extends Controller
{
 public function getAllOrders()
 {
    $orders=Order::all();
    return view('employee',compact('orders'));
 }
}
