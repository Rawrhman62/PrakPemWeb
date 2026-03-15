<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'showForm']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/items', [ItemController::class, 'index']);

// Route::get('/', function () {
    // return view('welcome');        < ---- Ini dri praktikum, hapus aja kalo pake HomeController - Fazri
// });

// praktikum bag 1 - Fazri
Route::get('/user/{id}', function ($id) {
    return 'User dengan ID' . $id;
});
