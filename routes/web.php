<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Rute GET sederhana
Route::get('/hello', function(){
    return 'Hello, World!';
});

//RUte dengan parameter
Route::get('/user/{id}', function($id){
    return "User ID:" . $id
});
