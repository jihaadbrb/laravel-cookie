<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cookieController;
use App\Http\Controllers\registeredController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/createcookie',[cookieController::class,'createcookie']);

Route::get('cookieform',function (){
    return view('cookie');});

Route::get('/createuser',function(){
   return view('register') ;
});

Route::post('/register',[registeredController::class,'createUser']);

