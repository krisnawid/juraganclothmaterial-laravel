<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        # code...
        $produk = Produk::get();
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
        $this->validate($request, [
            'namaProduk' => 'required',
            'gambarProduk' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'deskripsiProduk' => 'required',
            'stok' => 'required'
        ]);

        $file = $request->file('gambarProduk');

        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'uploads/produk';
		$file->move($tujuan_upload,$nama_file);
 
		Produk::create([
			'namaProduk' => $request->namaProduk,
            'gambarProduk' => $nama_file,
            'deskripsiProduk' => $request->deskripsiProduk,
            'stok' => $request->stok
        ]);
        
        return redirect('/adminproduk');
    }
}
