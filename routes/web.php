<?php

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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/lowongan', function(){
    return view('application/lowongan');
});

Route::get('/login', function(){
    return view('application/login');
});
Route::get('/artikel', function(){
    return view('application/artikel');
});
Route::get('/jobdetail', function(){
    return view('application/jobdetail');
});
Route::get('/list', function(){
    return view('application/listdata');
});
