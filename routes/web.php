<?php

use Illuminate\Support\Facades\Route;


Route::get('/about', function(){
    return view('about');
})->name('about');
Route::get("/blog", function(){
    return view('blog');
})->name('blog');
Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::get('/login', function () {
    return "<a href='admin/woramet'>Login</a>";
});
Route::get('admin/woramet', function () {
    return "<p>this is woramet page</p>";
});



Route::get('/login2', function () {
    return "<a href='" . route('gamePage') . "'>Login</a>";
});
Route::get('/admin/game', function () {
    return "<p>this is game page</p>";
})->name('gamePage');



Route::get('/post/{idPost}', function ($idblog) {
    return "<h1>id Post is ${idblog}</h1>";
});



Route::fallback(function(){
    return "<h1> Page not found 404</h1>";
});



Route::get('myPage', function(){
    return view('myPage');
});

