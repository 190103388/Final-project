<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UploadController;
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

Route::get('/login', function () {
    return view('login');
});

// Route::get('/{lang}', function ($lang) {
// 	App::setlocale($lang);
//     return view('/login');
// });

Route::get('/logout', function () {
	Session::forget('user');
    return redirect('/login');
});

// Route::get('/logout/{lang?}', function ($lang) {
// 	App::setlocale($lang);
// 	Session::forget('user');
//     return redirect('/login');
// });

Route::post('/login', [UserController::class,'login']);

Route::get('/', [ProductController::class,'index']);
Route::get('detail/{id}', [ProductController::class,'detail']);
Route::get('search', [ProductController::class,'search']);


Route::post('add_to_cart', [ProductController::class,'addToCart']);

Route::get('cartlist', [ProductController::class,'cartList']);
Route::get('removecart/{id}', [ProductController::class,'removeCart']);
Route::get('ordernow', [ProductController::class,'orderNow']);

Route::post('orderplace', [ProductController::class,'orderPlace']);

Route::get('myorders', [ProductController::class,'myOrders']);

Route::view('/register','register');
Route::post('/register', [UserController::class,'register']);

Route::get('/send', [MailController::class, 'send']);


Route::get('/register/import', function () {
    return view('/import');
});

Route::post('/register/upload', [UploadController::class, 'index']);

