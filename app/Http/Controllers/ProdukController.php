<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    public function indexAdmin()
    {
        $produk = Produk::orderBy('id_produk', 'desc')->get();
        return view('produk.index', compact('produk'));
    }

    public function create()
    {
        return view('produk.create_produk'); 
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|min:3|max:100',
            'harga' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            
        ]);

        if ($validator->fails()) {
            session()->flash('error', 'Validasi gagal - periksa input Anda.');
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Produk::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stock' => $request->stock,
            
        ]);

        return redirect()->route('admin.produk')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.edit_produk', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|min:3|max:100',
            'harga' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $produk = Produk::findOrFail($id);
        $produk->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stock' => $request->stock,
        ]);
        return redirect()->route('admin.produk')->with('success', 'Produk berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('admin.produk')->with('success', 'Produk berhasil dihapus.');
    }
}
