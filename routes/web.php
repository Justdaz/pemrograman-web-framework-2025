<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UtsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rahasia', function(){
    return 'ini halaman rahasia';
})->middleware(['auth','RoleCheck:admin,owner']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','RoleCheck:admin,owner'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/product', [ProductController::class,'index']);
// Route::get('/product/create', [ProductController::class,'create']);
// Route::get('/product', [ProductController::class,'store']);
// Route::get('/product/{id}', [ProductController::class,'show']);
// Route::get('/product/{id}/edit', [ProductController::class,'edit']);
// Route::get('/product/{id}', [ProductController::class,'update']);
// Route::get('/product/{id}', [ProductController::class,'destroy']);

route::get('/product/{id}', [ProductController::class,'index']);

Route::get('/product/{angka}', [ProductController::class, 'index'])
    ->middleware(['auth', 'role:admin,owner']);


Route::get('/demo-template', function () {
    return view('test.home');
});

Route::get('/child', function () {
    return view('test.child');
});

Route::get('/uts', function () {
    return view('uts.index');
});

Route::get('/uts', [UtsController::class, 'index']);


require __DIR__.'/auth.php';
