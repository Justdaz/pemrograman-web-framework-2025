<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Rute dengan parameter
// Route::get('/user/{id}', function($id){
//     return "User ID:" . $id;
// });

//Rute dengan parameter
Route::prefix('manage')->group(function(){

Route::get('/user/{name?}', function($name= 'Guest'){
    return "Hello," . $name;
})->name('user');

Route::get('/profile', function(){
    return "This is the profile page.";
})->name('profile');

//Rute dengan parameter
Route::get('/redirect-to-profile', function(){
    return redirect()->route('user');
});
}

);
