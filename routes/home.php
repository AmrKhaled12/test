<?php

use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can auth web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',function (){
   return view ('layouts.landing');
});

Route::prefix('home')->group(function (){
    Route::get('/welcome',[HomeController::class,'show_home'])->name('home');
    Route::get('/getviewer',[HomeController::class,'get_video'])->name('get');
});
