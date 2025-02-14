<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/post', function () {
    return view('post');
});



Route::get('/post/firstpost', function () {
    return view('firstpost');
});

Route::get('/post/{id?}', function (string $id = null) {
    if($id) {
        return "<h1>Post ID : ". $id. "</h1>";
        
    }else{
       
        return "<h1>No post ID provided</h1>";
    }
    
})->whereAlphaNumeric('id');

