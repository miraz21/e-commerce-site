<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 
Route::get('send-sms', [App\Http\Controllers\Backend\SendSMSController::class, 'index']);

Route::get('/inform', [App\Http\Controllers\Frontend\HomeController::class,'data'])->name('inform.data');

Route::get('/inform/create', [App\Http\Controllers\Frontend\HomeController::class,'create']);

Route::post('/inform/create', [App\Http\Controllers\Frontend\HomeController::class,'store'])->name('data.store');

Route::get('/get-all-employee', [App\Http\Controllers\EmpController::class, 'getAllOrders']);

Route::get('stripe', [App\Http\Controllers\StripeController::class, 'stripe']);

Route::post('stripe', [App\Http\Controllers\StripeController::class, 'stripePost'])->name('stripe.post');

Route::get('/',[App\Http\Controllers\Frontend\HomeController::class,'index'])->name('home');

Route::get('/product/{id}/{slug}',[App\Http\Controllers\Frontend\HomeController::class,'productShow'])->name('product.show');

Route::post('search',[App\Http\Controllers\Frontend\HomeController::class,'search'])->name('search');

Route::get('/add-to-cart/{id}',[App\Http\Controllers\Frontend\CartController::class,'cart'])->name('add.to.cart');

Route::get('/cart',[App\Http\Controllers\Frontend\CartController::class,'showcart'])->name('cart');

Route::get('/cart/add',[App\Http\Controllers\Frontend\CartController::class,'cartItem'])->name('cart.add');

Route::get('/cart/delete/{id}',[App\Http\Controllers\Frontend\CartController::class,'delete'])->name('delete.cart');

Route::get('/registration',[App\Http\Controllers\Frontend\UserController::class,'registration'])->name('registration');

Route::post('/registration',[App\Http\Controllers\Frontend\UserController::class,'doRegistration']);

Route::get('/login',[App\Http\Controllers\Frontend\UserController::class,'login'])->name('login');

Route::post('/login',[App\Http\Controllers\Frontend\UserController::class,'doLogin']);

Route::get('/logout',[App\Http\Controllers\Frontend\UserController::class,'logout'])->name('logout');

Route::post('/order',[App\Http\Controllers\Frontend\OrderController::class,'doOrder'])->name('do.order');

Route::get('/admin/login',[App\Http\Controllers\Backend\LoginController::class,'loginForm'])->name('admin.login');

Route::post('/admin/login',[App\Http\Controllers\Backend\LoginController::class,'login']);

Route::middleware(['auth'])->group(function(){

Route::get('/profile',[App\Http\Controllers\Frontend\UserController::class,'profile'])->name('profile');

Route::post('/profile',[App\Http\Controllers\Frontend\UserController::class,'updateProfile']);

Route::middleware(['is_admin'])->prefix('admin')->group(function(){

Route::get('/',[App\Http\Controllers\Backend\DashboardController::class,'index'])->name('dashboard');

Route::get('/logout',[App\Http\Controllers\Backend\LoginController::class,'logout'])->name('admin.logout');

Route::get('/products',[App\Http\Controllers\Backend\ProductController::class,'index'])->name('admin.product');

Route::get('/products/create',[App\Http\Controllers\Backend\ProductController::class,'create'])->name('admin.product.create');

Route::post('/products/create',[App\Http\Controllers\Backend\ProductController::class,'store']);

Route::get('/products/edit/{id}',[App\Http\Controllers\Backend\ProductController::class,'edit'])->name('admin.product.edit');

Route::post('/products/edit/{id}',[App\Http\Controllers\Backend\ProductController::class,'update']);

Route::get('/products/delete/{id}',[App\Http\Controllers\Backend\ProductController::class,'delete'])->name('admin.product.delete');

Route::get('/customers',[App\Http\Controllers\Backend\CustomerController::class,'index'])->name('admin.customer');

Route::get('/customers/edit/{id}',[App\Http\Controllers\Backend\CustomerController::class,'edit'])->name('admin.customer.edit');

Route::post('/customers/edit/{id}',[App\Http\Controllers\Backend\CustomerController::class,'update']);

Route::get('/customers/delete/{id}',[App\Http\Controllers\Backend\CustomerController::class,'delete'])->name('admin.customer.delete');

Route::get('/order',[App\Http\Controllers\Backend\OrderController::class,'index'])->name('admin.order');

Route::get('/order/edit/{id}',[App\Http\Controllers\Backend\OrderController::class,'edit'])->name('admin.order.edit');

Route::post('/order/edit/{id}',[App\Http\Controllers\Backend\OrderController::class,'update']);

Route::get('/order/delete/{id}',[App\Http\Controllers\Backend\OrderController::class,'delete'])->name('admin.order.delete');

});

});