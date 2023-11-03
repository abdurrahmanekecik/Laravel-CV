<?php

use app\Http\Controllers\Admin\AboutController;
use app\Http\Controllers\Admin\HomeController;
use app\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Admin\ProjectController;
use app\Http\Controllers\Admin\EducationController;
use app\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\FrontendController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProfileController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {





    Route::resource("settings",SettingController::class);
    Route::resource("home",HomeController::class);
    Route::resource("about",AboutController::class);
    Route::resource("projects",ProjectController::class);
    Route::resource("educations",EducationController::class);
    Route::resource("blogs",BlogController::class);


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
