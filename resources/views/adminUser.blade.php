@extends('adminMaster')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">User</h1>
    </div>

    <!-- Tablenya bos -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h6 class="m-0 font-weight-bold text-primary">Table Data User</h6>
            </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>noHp</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($dataUser as $itemUser)
                    <tr>
                    <td>{{ $itemUser -> username }}</td>
                    <td>{{ $itemUser -> nama}}</td>
                    <td>{{ $itemUser -> alamat }}</td>
                    <td>{{ $itemUser -> noHp }}</td>
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