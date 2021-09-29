<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Useres\LoginController;

Route::get('admin/login',[AdminController::class,'login']);
Route::post('admin/login/store', [AdminController::class,'store']);
Route::get('user/login',[LoginController::class,'login']);
Route::post('user/login/store',[LoginController::class,'store']);
/*Route::middleware(['auth'])->group( function(){
    Route::prefix('admin') ->group(function(){
        Route::get('/',[AdminController::class, 'index']) ->name('admin');
    });


});*/


