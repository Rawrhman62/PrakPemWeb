<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        // Cek login manual seperti sebelumnya
        if (!session()->has('user_id')) {
            return redirect('/login');
        }

        // Data statis sebagai contoh
        $items = [
            ['id' => 1, 'nama' => 'Laptop SUS', 'stok' => 10, 'harga' => '10jt'],
            ['id' => 2, 'nama' => 'Mouse Tikus', 'stok' => 50, 'harga' => '200rb'],
            ['id' => 3, 'nama' => 'Keyboard Papan Kunci', 'stok' => 15, 'harga' => '800rb'],
        ];

        return view('items.index', compact('items'));
    }
}
