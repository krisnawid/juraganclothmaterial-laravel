<!-- Menghubungkan dengan template master -->
@extends('adminMaster')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Produk</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="/adminproduk/tambahProses" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Nama Produk</label>
                        <input type="text" class="form-control" name="namaProduk">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                        <textarea class="form-control" rows="3" name="deskripsiProduk"></textarea>
                </div>
                <div class="form-group">
                    <label>Gambar Produk</label>
                        <input type="file" class="form-control-file" name="gambarProduk">
                </div>
                <div class="form-group">
                    <label>Stok</label>
                        <input type="text" class="form-control" name="stok">
                </div>
                <button type="submit" class="btn btn-success">Tambah</button>
                </form>
        </div>
    </div>
</div>
@endsection