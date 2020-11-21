<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::view('/login','login');
Route::post('login',[UserController::class,'login']);

Route::view('/errorlogin','errorlogin');

Route::get('/logout',function(){
   session()->forget('user');
    return redirect('login');
});


Route::get('/',[ProductController::class,'product']);

Route::get('detail/{id}',[ProductController::class,'detail']);

Route::get('search',[ProductController::class,'search']);

Route::post('cart',[ProductController::class,'cart']);

Route::get('view_cart',[ProductController::class,'view_cart']);

Route::get('removecart/{id}',[ProductController::class,'removecart']);

Route::get('ordernow',[ProductController::class,'ordernow']);

Route::post('orderplace',[ProductController::class,'orderplace']);

Route::get('myorder',[ProductController::class,'myorder']);

Route::view('register','register');
Route::post('register',[UserController::class,'register']);







