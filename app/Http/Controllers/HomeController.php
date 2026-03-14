<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //$data = [
        //    'nama' => 'Budi',
        //    'pekerjaan' => 'Developer'
        //];
        $nama = "Teddy";
        $pekerjaan = "Programmer";
        return view('home', compact('nama', 'pekerjaan'));
    }
    public function login()

    {
        return view('login');
    }
}