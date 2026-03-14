<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [HomeController::class, 'login']);

// Route::get('/', function () {
    // return view('welcome');
// });

// tambah user handler sementara - Fazri
Route::get('/user/{id}', function ($user_id) {
    return 'User dengan ID' . $user_id;
});
