<!-- Menghubungkan dengan template master -->
@extends('adminMaster')

@section('content')
    
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Produk</h1>
    </div>

    <!-- Tablenya bos -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h6 class="m-0 font-weight-bold text-primary">Table Data Produk</h6>
                    <a href="/adminproduk/tambah" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Produk</span>
                    </a>
            </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama Produk</th>
                  <th>Gambar Produk</th>
                  <th>Deskripsi Produk</th>
                  <th>Stok</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($dataProduk as $itemProduk)
                    <tr>
                    <td>{{ $itemProduk -> namaProduk }}</td>
                    <td>{{ $itemProduk -> gambarProduk }}</td>
                    <td>{{ $itemProduk -> deskripsiProduk}}</td>
                    <td>{{ $itemProduk -> stok }}</td>
                    <td>
                      <a href="" role="button" class="btn btn-warning btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-edit"></i>
                        </span>
                        <span class="text">Edit</span>
                      </a>
                      |
                      <a href="" role="button" class="btn btn-danger btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">Delete</span>
                      </a>
                    </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection