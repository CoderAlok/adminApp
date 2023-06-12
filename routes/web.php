<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('menu1', [DashboardController::class, 'menu1'])->name('dashboard.menu1');
    Route::get('menu2', [DashboardController::class, 'menu2'])->name('dashboard.menu2');
    Route::get('menu3', [DashboardController::class, 'menu3'])->name('dashboard.menu3');
});
