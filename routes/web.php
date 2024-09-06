<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function (){
    return view('pages.about');
})->name('about');

Route::get('/post', function(){
    return view('pages.post');
})->name('post');
