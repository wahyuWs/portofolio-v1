<?php

use App\Http\Controllers\AddContentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PortofolioController;
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

// Route::get('/', function () {
//     return view('content.home.index');
// });
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/auth', [AuthController::class, 'auth']);

Route::get('/', [PortofolioController::class, 'index']);
Route::resource('home', PortofolioController::class);
Route::resource('add', AddContentController::class)->middleware('auth');
