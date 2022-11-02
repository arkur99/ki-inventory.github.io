<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\authController;

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
//pemanggilan view to routes
// Route::get('/', function () {
//     return view('login');
// });
Route::get('/beranda',function(){
    return view('home');
});
//pemanggilan controller to routes
// Route::get('/dashboard',[HomeController::class,'index']);
Route::get('/',[authController::class,'index']);

