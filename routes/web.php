<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FormController;
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

Route::get('/dashboard', [FormController::class, 'readdata']);

Route::get('/register', [RegisterController::class, 'index'])->name('index');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('index');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('/form', [FormController::class, 'input']);
Route::post('/form/store', [FormController::class, 'store']);
Route::get('home', function () {
    $form = DB::table('form')->where('users_id', Auth::user()->id)
    ->get();
    return view('dashboard.home', ['form' => $form]);
});

Route::get('/admin', [AdminController::class,'index']);
Route::get('/create', [AdminController::class, 'create']);
Route::post('/store', [AdminController::class, 'store']);
Route::get('/show/{id}', [AdminController::class, 'show']);
Route::post('/update/{id}', [AdminController::class, 'update']);
Route::get('/destroy/{id}', [AdminController::class, 'destroy']);
