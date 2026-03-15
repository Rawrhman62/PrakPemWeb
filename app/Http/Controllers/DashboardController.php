<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Cek apakah session user_id ada
        if (!session()->has('user_id')) {
            return redirect('/login')->with('error', 'Silakan login terlebih dahulu!');
        }

        // Ambil data dari session untuk ditampilkan di view
        $name = session('user_name');

        return view('dashboard', compact('name'));
    }
}
