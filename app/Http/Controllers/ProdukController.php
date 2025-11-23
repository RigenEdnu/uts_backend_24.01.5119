<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::take(4)->get();
        return view('front.home', compact('produk'));
    }

    public function cari_produk(request $request)
    {
        $nama      = $request->input('nama');
        $harga_min = $request->input('min');
        $harga_max = $request->input('max');

        $query = Produk::query();

        if (!empty($nama)) {
            $query->where('nama', 'like', '%' . $nama . '%');
        }

        if (!empty($harga_min)) {
            $query->where('harga', '>=', $harga_min);
        }

        if (!empty($harga_max)) {
            $query->where('harga', '<=', $harga_max);
        }

        $produk = $query->get();

        return view('front.produk', compact('produk', 'nama', 'harga_min', 'harga_max'));
    }
}
