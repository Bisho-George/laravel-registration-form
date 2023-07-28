<?php

use App\Http\Controllers\emailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;




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



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/form', [userController::class, 'create'])->name('create');
        Route::post('/form', [userController::class, 'store'])->name('validate.form');
    }
);
Route::get('/sendEmail', [emailController::class, 'create']);