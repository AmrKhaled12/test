<?php

use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Relation\RelationController;
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


Route::prefix('relation')->group(function (){
   Route::get('onetoone',[RelationController::class,'one_to_one'])->name('one');
    Route::get('onetomany',[RelationController::class,'one_to_many'])->name('onemany');
    Route::get('manytomany',[RelationController::class,'many_to_many'])->name('many');
});
