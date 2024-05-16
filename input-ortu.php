<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Survey kepuasan pelanggan Polinema</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="app/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="app/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<?php include "navbar.php"; ?> 

<?php include "sidebar.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Informasi User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
           
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          
        <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Informasi User</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                <div class="form-group">
                    <label for="Tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="Tanggal" placeholder="Tanggal">
                  </div>

                  <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" class="form-control" id="Nama" placeholder="Nama">
                  </div>

                  <div class="form-group">
                    <label for="JK">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="JK" placeholder="JK">
                  </div>

                  <div class="form-group">
                    <label for="Umur">Umur</label>
                    <input type="email" class="form-control" id="Umur" placeholder="Umur">
                  </div>
                
                  <div class="form-group">
                    <label for="Nomer">Nomer Hp</label>
                    <input type="number" class="form-control" id="Nomer" placeholder="Nomer">
                  </div>

                  <div class="form-group">
                    <label for="Pendidikan">Pendidikan</label>
                    <input type="text" class="form-control" id="Pendidikan" placeholder="Pendidikan">
                  </div>

                  <div class="form-group">
                    <label for="Pekerjaan">Pekerjaan</label>
                    <input type="text" class="form-control" id="Pekerjaan" placeholder="Pendidikan">
                  </div>

                  <div class="form-group">
                    <label for="Penghasilan">Penghasilan</label>
                    <input type="text" class="form-control" id="Penghasilan" placeholder="Penghasilan">
                  </div>

                  <div class="form-group">
                    <label for="NIM-Mahasiswa">NIM Mahasiswa</label>
                    <input type="number" class="form-control" id="NIM-Mahasiswa" placeholder="NIM-Mahasiswa">
                  </div>

                  <div class="form-group">
                    <label for="Nama-mahasiswa">Nama Mahasiwa</label>
                    <input type="text" class="form-control" id="Nama-Mahasiswa" placeholder="Nama-Mahasiswa">
                  </div>
                
                  <div class="form-group">
                    <label for="Prodi-Mahasiswa">Prodi Mahasiwa</label>
                    <input type="text" class="form-control" id="Prodi-Mahasiswa" placeholder="Prodi-Mahasiswa">
                  </div>

                  <div class="card-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>



        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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

 <?php include "footer.php"; ?>

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="app/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="app/dist/js/adminlte.min.js"></script>
</body>
</html>
