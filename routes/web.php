<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JalurController;
use App\Http\Controllers\AdminController;
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
    return view('pages.dashboard');
})->middleware('auth')->name('dashboard');

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'login')->name('login.action');
    Route::post('/logout', 'logout')->name('logout');
});

Route::resource('admin', AdminController::class)->middleware('auth');
Route::resource('jalur', JalurController::class)->middleware('auth');
Route::get('/jalur/{id}/status', [JalurController::class, 'updateStatus'])->name('jalur.status')->middleware('auth');
