<?php

use App\Http\Controllers\Ajax\AjaxController;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;

Route::prefix('ajax')->group(function (){
    Route::get('/welcome',[AjaxController::class,'index'])->name('ShowPosts');
 Route::get('/edit/{id}',[AjaxController::class,'edit'])->name('edit');

});
