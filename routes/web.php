<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\FrontController;
use \App\Http\Controllers\BackController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\SettingController;
use \App\Http\Controllers\AboutController;
use \App\Http\Controllers\EducationController;
use \App\Http\Controllers\PartnerController;
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


Route::get('/', [FrontController::class, 'index'])->name("index");

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', [BackController::class, 'admin'])->name("admin");
    Route::resource("homes",HomeController::class);
    Route::resource("abouts",AboutController::class);
    Route::resource("educations",EducationController::class);
    Route::resource("partners",PartnerController::class);
    Route::get("/settings", [SettingController::class, 'settingsGet'])->name("settingsGet");
    Route::post("/settings", [SettingController::class, 'settingsPost'])->name("settingsPost");
});
