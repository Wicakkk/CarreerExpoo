<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KepsekController;
use App\Http\Controllers\PelamarController;

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

Route::get('/', function () {
    return view('statisdoangcok.index');
});

Route::get('/user-manual', function () {
    return view('statisdoangcok.usermanual');
});

Route::get('/pharos', function () {
    return view('pt.pharos');
});

Route::post('/save/{id}', [PelamarController::class, 'save']);

Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
});

Route::post('/loginAction', [LoginController::class, 'loginAction'])->name('login-action');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/kepsek', [KepsekController::class, 'index'])->name('kepsek');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});



