<?php

use App\Http\Controllers\Admin\ExcelController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Useres\LoginController;

Route::get('users/login',[LoginController::class,'login']);
Route::post('users/login/auth',[LoginController::class,'store1']);

Route::get('admin/login',[AdminController::class,'login']);
Route::post('admin/login/store', [AdminController::class,'store']);

Route::get('home',[MainController::class,'index'])->name('home');
Route::middleware(['auth'])->group( function(){
    Route::prefix('admin') ->group(function(){
        Route::get('main',[AdminController::class, 'hello']) ->name('admin');
        Route::get('add_excel',[ExcelController::class,'index']);
    });
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
