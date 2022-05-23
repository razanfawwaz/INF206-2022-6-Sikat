<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DashboardAdminController;
use GuzzleHttp\Middleware;

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
    return view('index');
});

Route::get('/buatlaporan', function () {
    return view('dashboard\form');
});

Route::get('/dashboard', function () {
    return view('dashboard\dashboard');
});

Route::get('/admin', function () {
    return view('admin.index');
})->middleware('auth');

Route::resource('menuAdmin', DashboardAdminController::class)
    ->middleware('auth');


Route::get('/dashboard', [FormController::class, 'readdata']);

Route::get('/form', [FormController::class, 'input']);
Route::post('/form/store', [FormController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('index');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('index');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');

Route::get('/home', [HomeController::class, 'index'])->name('index')->middleware('auth');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
