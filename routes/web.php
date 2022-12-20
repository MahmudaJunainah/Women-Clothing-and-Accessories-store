<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController ;
use App\Http\Controllers\AdminController ;
use App\Http\Controllers\CategoryController ;
use App\Http\Controllers\ProductController ;
use App\Http\Controllers\CartController ;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductrequestController;
use App\Http\Controllers\RatingController;



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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index',[Basecontroller::class,'index'])->name('index');

Route::get('/ProductView', [Basecontroller::class,'productView'])->name('productView');
Route::get('/login',[Basecontroller::class,'login'])->name('login');
Route::post('/login',[Basecontroller::class,'logincheck'])->name('logincheck');

Route::get('/product',[Basecontroller::class,'product'])->name('product');
Route::get('register',[Basecontroller::class,'register'])->name('register');
Route::post('register',[Basecontroller::class,'user_store'])->name('user_store');
Route::get('/logout',[Basecontroller::class,'logout'])->name('logout');
Route::get('/rating',[Ratingcontroller::class,'index'])->name('rating');

Route::get('/admin/login',[Admincontroller::class,'admin_login'])->name('admin_login');
Route::post('/admin/login',[Admincontroller::class,'makelogin'])->name('admin.makelogin');
Route::group(['middleware'=>'auth'],function(){
    Route::get('/cart',[Basecontroller::class,'cart'])->name('cart');
    Route::post('cart/store',[Cartcontroller::class,'store'])->name('cart.store');
    Route::get('cart/delete/{id}',[Cartcontroller::class,'destroy'])->name('cart.delete');
    Route::get('/cash_order',[Basecontroller::class,'cash_order'])->name('cash_order');
    Route::get('/user/dashboard',[Basecontroller::class,'userdashboard'])->name('user.dashboard');
    Route::get('user/profile',[Profilecontroller::class,'index'])->name('user.profile');
    Route::post('/user/user_info',[Profilecontroller::class,'store'])->name('user.store');
    Route::get('/show_order',[Basecontroller::class,'show_order'])->name('show_order');
    Route::get('user/productrequest',[Productrequestcontroller::class,'index'])->name('productrequest');
    Route::post('/user/productrequest_info',[Productrequestcontroller::class,'store'])->name('productrequest.store');
    
    Route::get('/rating/create',[Ratingcontroller::class,'create'])->name('rating.create');
    Route::post('/rating/create',[Ratingcontroller::class,'store'])->name('rating.store');
    
    
});


Route::group(['middleware'=>'auth'],function(){
    Route::get('/admin/dashboard',[Admincontroller::class,'dashboard'])->name('admin.dashboard');
    Route::get('/admin/logout',[Admincontroller::class,'logout'])->name('admin.logout');
    Route::get('/order',[Admincontroller::class,'order'])->name('order');

    /*CategoryController routes*/
    Route::get('/category/add',[Categorycontroller::class,'create'])->name('category.create');
    Route::post('/category/add',[Categorycontroller::class,'store'])->name('category.store');

    /*ProductController routes*/ 
    Route::get('/products',[Productcontroller::class,'index'])->name('product.list');
    Route::get('/product/create',[Productcontroller::class,'create'])->name('product.create');
    Route::post('/product/create',[Productcontroller::class,'store'])->name('product.store');
    Route::get('/product/edit/{id}',[Productcontroller::class,'edit'])->name('product.edit');
    Route::post('/product/edit/{id}',[Productcontroller::class,'update'])->name('product.update');
    Route::post('/product/delete',[Productcontroller::class,'destroy'])->name('product.delete');
    Route::get('/product/details/{id}',[Productcontroller::class,'extraDetails'])->name('product.extraDetails');
    Route::post('/product/details/{id}',[Productcontroller::class,'extraDetailsStore'])->name('product.extraDetailsStore');
    


});