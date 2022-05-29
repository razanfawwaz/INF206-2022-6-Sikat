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

Route::get('/tentang', function () {
    return view('navbarMenu.about');
});
Route::get('/overview', function () {
    return view('navbarMenu.overview');
});

Route::get('/register', [RegisterController::class, 'index'])->name('index');
Route::post('/register', [RegisterController::class, 'store']);

//Route Login
Route::get('/login', [LoginController::class, 'index'])->name('index');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');

Route::group(['middleware' => 'super_admin'], function () {
    Route::get('/superadmin', [AdminController::class,'AdminIndex']);
    Route::post('/superadmin/store', [AdminController::class, 'UserStore']);
});


Route::group(['middleware' => 'is_admin'], function () {
    //Route Admin
    Route::get('/admin', [AdminController::class,'index']);
    Route::get('/admin/show/{id}', [AdminController::class, 'show']);
    Route::post('/admin/update/{id}', [AdminController::class, 'update']);
    Route::get('/admin/destroy/{id}', [AdminController::class, 'destroy']);
});


Route::group(['middleware' => 'auth', 'guest'], function () {
    //Route Home
    Route::get('home', function () {
        $form = DB::table('form')->where('users_id', Auth::user()->id)
    ->get();
        return view('dashboard.index', ['form' => $form]);
    });

    //Route Auth
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    //Route Form
    Route::get('/home/form', [FormController::class, 'input']);
    Route::post('/home/form/store', [FormController::class, 'store']);
});
