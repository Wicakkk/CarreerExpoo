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
    Route::get('/cirill-indonesia', function () {
        return view('pt.cirill-indonesia');
    });
    Route::get('/indomaret', function () {
        return view('pt.indomaret');
    });
    Route::get('/haraanargya', function () {
        return view('pt.haraanargya');
    });
    Route::get('/sutindo', function () {
        return view('pt.sutindo');
    });
    Route::get('/sigma', function () {
        return view('pt.sigma');
    });
    Route::get('/anteraja', function () {
        return view('pt.anteraja');
    });
    Route::get('/trapo', function () {
        return view('pt.trapo');
    });
    Route::get('/sahamrakyat', function () {
        return view('pt.sahamrakyat');
    });

    Route::get('/qurrny', function () {
        return view('pt.qurrny');
    });

    Route::get('/ap2ln', function () {
        return view('pt.ap2ln');
    });

    Route::get('/indivara', function () {
        return view('pt.indivara');
    });

    Route::get('/prima', function () {
        return view('pt.prima');
    });

    Route::get('/infomedia', function () {
        return view('pt.infomedia');
    });


Route::post('/save/{id}', [PelamarController::class, 'save']);

Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/loginAction', [LoginController::class, 'loginAction'])->name('login-action');
});



Route::group(['middleware' => ['auth']], function () {
    Route::get('/kepsek', [KepsekController::class, 'index'])->name('kepsek');
    Route::get('/dashboard', [KepsekController::class, 'hrd'])->name('dashboard');

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});



