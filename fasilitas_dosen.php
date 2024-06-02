<?php
session_start();

//Pengecekan dia itu udah login apa nggak, klo blum balik ke index.php
if (!isset($_SESSION["nama"]))
{
header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Survey kepuasan pelanggan Polinema</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="app/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="app/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <?php include "navbar.php"; ?>

        <?php include "sidebar_dosen.php"; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Fasilitas</h1>
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
                                    <h3 class="card-title">Fasilitas</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                                class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">

                                    <form method="post" action="submit_fasilitas_dosen.php">
                                        <table class="table">
                                            <thead>
                                                <tr>

                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                // Koneksi ke database
                                                $servername = "localhost";
                                                $username = "root";
                                                $password = "";
                                                $dbname = "projek_akhir";

                                                // Buat koneksi
                                                $conn = new mysqli($servername, $username, $password, $dbname);

                                                // Periksa koneksi
                                                if ($conn->connect_error) {
                                                    die("Koneksi Gagal: " . $conn->connect_error);
                                                }
                                                
                                                /// Set id_kategori ke dalam session


                                                // Query untuk mengambil data dari tabel m_survey_soal dengan kategori_id 4
                                                $sql = "SELECT * FROM m_survey_soal WHERE kategori_id = 4";
                                                $result = $conn->query($sql);

                                                // Tampilkan data dalam tabel HTML
                                                if ($result->num_rows > 0) {
                                                    echo "<table class='table table-striped'>";
                                                    echo "<thead class='judul-table'>";
                                                    echo "<tr>";
                                                    echo "<th scope='col'>Soal</th>";
                                                    echo "<th scope='col'>Tingkat Kepuasan</th>";
                                                    echo "</tr>";
                                                    echo "</thead>";
                                                    echo "<tbody>";
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row['soal_nama'] . "</td>";
                                                        echo "<td>";
                                                        // Buat radio button untuk setiap tingkat kepuasan
                                                        for ($i = 1; $i <= 4; $i++) {
                                                            echo "<label><input type='radio' name='tingkat_kepuasan[" . $row['soal_id'] . "]' value='$i'>$i</label>";
                                                        }
                                                        echo "</td>";
                                                        echo "</tr>";
                                                    }
                                                    echo "</tbody>";
                                                    echo "</table>";
                                                    echo "<button type='submit' class='btn btn-primary'>Submit</button>"; // Tombol submit
                                                } else {
                                                    echo "Tidak ada data.";
                                                }

                                                // Tutup koneksi
                                                $conn->close();
                                                ?>


                                            </tbody>
                                        </table>
                                    </form>


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
            </
