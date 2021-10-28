           <!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    @include('template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('template.navbar');
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('gambar/admin.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Project CRUD</span>
    </a>

    <!-- Sidebar -->
    @include('template.sidebar')
    <!-- /.sidebar -->

  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Update Data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Data</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      
        <div class="card card-outline">
            <div class="card-header">
                
            <form action="/update-data/{{ $toko->id }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama_barang">Nama Barang :</label>
                    <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="{{ $toko->nama_barang }}" required>
                </div>
                <div class="form-group">
                    <label for="jenis_barang">Jenis Barang :</label>
                    <input type="text" name="jenis" class="form-control" id="jenis_barang" value="{{ $toko->jenis }}" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_barang">Jumlah Barang :</label>
                    <input type="text" name="jumlah" class="form-control" id="jumlah_barang" value="{{ $toko->jumlah }}" required>
                </div>
                <div class="form-group">
                    <label for="harga_barang">Harga Barang :</label>
                    <input type="text" name="harga" class="form-control" id="harga_barang" value="{{ $toko->harga }}" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="sumbit">Update</button>
                </div>
                </form>

     
            </div>
        </div>

      </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">Hidayah Arif</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('template/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
