<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showForm() {
        return view('login');
    }

    public function login(Request $request) {
        // Data statis untuk contoh (bisa diganti query DB) - Fazri
        $userValid = 'admin@mail.com';
        $passValid = 'rahasia123';

        if ($request->email == $userValid && $request->password == $passValid) {
            // Simpan status login ke session - Fazri
            session(['user_id' => 1, 'user_name' => 'Admin']);
            return redirect('/dashboard');
        }

        return back()->with('error', 'Email atau password salah!');
    }

    public function logout() {
        session()->flush(); // Hapus semua data session - Fazri
        return redirect('/login');
    }
}
