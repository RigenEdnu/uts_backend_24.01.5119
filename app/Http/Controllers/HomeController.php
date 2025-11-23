<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $produk = [
            ['nama' => 'Produk 1', 'harga' => 7500000, 'gambar' => 'produk1.jpg', 'diskon' => 10],
            ['nama' => 'Produk 2', 'harga' => 4800000, 'gambar' => 'produk2.jpg', 'diskon' => 5],
            ['nama' => 'Produk 3', 'harga' => 5200000, 'gambar' => 'produk3.jpg', 'diskon' => 0],
            ['nama' => 'Produk 4', 'harga' => 1500000, 'gambar' => 'produk4.jpg', 'diskon' => 20],
            ['nama' => 'Produk 1', 'harga' => 7500000, 'gambar' => 'produk1.jpg', 'diskon' => 10],
            ['nama' => 'Produk 2', 'harga' => 4800000, 'gambar' => 'produk2.jpg', 'diskon' => 5],
            ['nama' => 'Produk 3', 'harga' => 5200000, 'gambar' => 'produk3.jpg', 'diskon' => 0],
            ['nama' => 'Produk 4', 'harga' => 1500000, 'gambar' => 'produk4.jpg', 'diskon' => 20],
            ['nama' => 'Produk 1', 'harga' => 7500000, 'gambar' => 'produk1.jpg', 'diskon' => 10],
            ['nama' => 'Produk 2', 'harga' => 4800000, 'gambar' => 'produk2.jpg', 'diskon' => 5],
            ['nama' => 'Produk 3', 'harga' => 5200000, 'gambar' => 'produk3.jpg', 'diskon' => 0],
            ['nama' => 'Produk 4', 'harga' => 1500000, 'gambar' => 'produk4.jpg', 'diskon' => 20],
            ['nama' => 'Produk 1', 'harga' => 7500000, 'gambar' => 'produk1.jpg', 'diskon' => 10],
            ['nama' => 'Produk 2', 'harga' => 4800000, 'gambar' => 'produk2.jpg', 'diskon' => 5],
            ['nama' => 'Produk 3', 'harga' => 5200000, 'gambar' => 'produk3.jpg', 'diskon' => 0],
        ];
        return view('front.home', compact('produk'));
    }
}
