<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'showForm']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function() {                               //
    if (!session('user_id')) {                                      //
        return redirect('/login');                                  //  < ------ Ini diganti yang pegang Dashboard - Fazri
    }                                                               //
    return "Halo " . session('user_name') . ", Anda berhasil masuk!";//
});

// Route::get('/', function () {
    // return view('welcome');        < ---- Ini dri praktikum, hapus aja kalo pake HomeController - Fazri
// });

// praktikum bag 1 - Fazri
Route::get('/user/{id}', function ($id) {
    return 'User dengan ID' . $id;
});
