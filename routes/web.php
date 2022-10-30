<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require __DIR__.'/auth.php';


Route::get('/', [HomeController::class, 'index'])->name("index");






Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', [HomeController::class, 'admin'])->name('admin');




});
