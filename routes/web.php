<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Models\Message; 

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
Route::get('/main', function () {
    return view('layouts.master');
});
Route::get('/book', function () {
    return view('dashboard.book');
});
Route::get('/category', function () {
    return view('dashboard.category');
});
Route::get('/index', function () {
    return view('dashboard.index');
});
Route::get('/rent-log', function () {
    return view('dashboard.rent-log');
});
// Route::get('/user', function () {
//     return view('dashboard.user');
// });
Route::get('/user', [AdminController::class, 'indexUsers'])->name('indexUser');


// message
Route::post('/store', [MessageController::class, 'storeMessage'])->name('store');
// register
Route::get('/register', [AuthController::class, 'indexRegister'])->name('register');
Route::post('/registerStore', [AuthController::class, 'storeRegister'])->name('registerStore');
// login
Route::get('/login', [AuthController::class, 'indexLogin'])->name('login');
Route::post('/loginAuth', [AuthController::class, 'auth'])->name('auth');

// user
// Route::post('/deleteindex', [AdminController::class, 'deleteIndex'])->name('deleteIndex');