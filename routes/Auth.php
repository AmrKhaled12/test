<?php


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::prefix('auth')->group(function (){
    Route::get('/login',[LoginController::class,'index'])->name('login');
    Route::post('/welcome',[LoginController::class,'check'])->name('check');

});

Route::prefix('auth')->group(function (){
    Route::get('/register',[RegisterController::class,'index'])->name('view_register');
    Route::post('/done',[RegisterController::class,'insert'])->name('insert');
    Route::get('/delete',[RegisterController::class,'DeleteAll'])->name('delete');
    Route::get('/showAll',[RegisterController::class,'showAll'])->name('show');
    Route::get('/showone/{id}',[RegisterController::class,'showone'])->name('showO');

});



