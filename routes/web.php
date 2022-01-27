<?php

use App\Models\User;
use Illuminate\Support\Facades\Request;
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



Route::get('/users', function(){
    dd(User::all());
});

Route::get("/home", function(){
return view("home");
});

Route::group(["middleware" => "auth"], function(){
    Route::get("/dashboard", function(){
        return view("dashboard");
    })->name("dashboard");


    Route::get('/', function () {
        return redirect()->route("dashboard");
    });
    Route::get('/profile', function () {
        return view("profile");
    })->name("profile");

});


//
