<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
//Route::get('/', [HomeController::class,'index']);
Route::get('/',function () {
    return view('home');
});
Route::get('/customer/account/login',[LoginController::class,'index'])->name('login');
Route::get('/customer/account/create',[RegisterController::class,'index'])->name('register');
Route::post('/customer/account/createpost',[RegisterController::class,'create'])->name('createUsers');
Route::get('/customer/account/userPosts',[PostController::class,'index'])->name('postPage');


