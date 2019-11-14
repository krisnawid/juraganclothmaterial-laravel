<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProdukController extends Controller
{
    public function index()
    {
        # code...
        $produk = DB::table('produk')->get();
        return view('adminProduk', ['dataProduk' => $produk]);
    }

    public function tambah()
    {
        # code...
        return view('adminProdukTambah');
    }

    public function tambahProses(Request $request)
    {
        # code...
        DB::table('produk')->insert([
            'namaProduk' => $request->namaProduk,
            'deskripsiProduk' => $request->deskripsi,
            'gambarProduk' => $request->gambarProduk,
            'stok'=>$request->stok
        ]);
        return redirect('/adminproduk');
    }
}
