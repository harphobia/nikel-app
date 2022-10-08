<?php

use App\Http\Controllers\AcceptorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
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

Route::get('/', function (Request $request) {
    dd($request->cookie());
    return redirect('/login');
});

Route::get('/login', [LoginController::class, 'index'])->name('loginpage');
Route::post('/auth', [LoginController::class, 'auth'])->name('auth');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('/order', OrderController::class)->only(['index', 'store']);
Route::resource('/acceptor', AcceptorController::class)->only(['index', 'update']);
