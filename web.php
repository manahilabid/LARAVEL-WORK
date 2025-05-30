<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers;

Route::get('/', function () {
    return view('welcome');
});


// view method
Route::view('/header','header')->name("header");
Route::view('/home','home')->name("home");
Route::view('/routes','routes')->name("about");
Route::view('/us','us')->name("blog");
Route::view('/welcome','welcome')->name("contact");



// post Route
Route::view('/routes','routes')->name("routes");



Route::view('/post','post')->name("post");

Route::post('/post',function(Request $Request){
    $name = $Request->name;
    $email = $Request->email;
    $number = $Request->number;
    $address = $Request->address;
     
    echo $name."<br>".$email."<br>".$number."<br>".$address;

})->name('form submitted');

// paramter Route

Route::get('/data/{id}',function($id){
    echo "<h1>".$id."</h1>";

});

Route::get('/name/{user}',function($user){
    echo "<h2>".$user."</h2>";

});

// controllers Route

Route::get('/demo',[formController::class,'user']); 