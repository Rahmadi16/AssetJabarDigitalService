<?php
require 'koneksi.php';
require 'cek.php';

// Query untuk mengambil total volume dari tabel barang
$query = "SELECT SUM(volume) AS total_volume FROM barang";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$total_volume = $row['total_volume'];

// Query SQL untuk menghitung total harga_satuan
$queryTotalBiaya = "SELECT SUM(harga_satuan) AS total_biaya FROM barang";
$resultTotalBiaya = mysqli_query($conn, $queryTotalBiaya);

if ($resultTotalBiaya) {
    $rowTotalBiaya = mysqli_fetch_assoc($resultTotalBiaya);
    $total_biaya = $rowTotalBiaya['total_biaya'];
} else {
    $total_biaya = 0; // Default value jika query error
}

// Query SQL untuk menghitung total akumulasi_2021
$queryTotalAkum = "SELECT SUM(akum_2021) AS total_akum2021 FROM barang";
$resultTotalAkum = mysqli_query($conn, $queryTotalAkum);

if ($resultTotalAkum) {
    $rowTotalAkum = mysqli_fetch_assoc($resultTotalAkum);
    $total_akum2021 = $rowTotalAkum['total_akum2021'];
} else {
    $total_akum2021 = 0; // Default value jika query error
}

// Query SQL untuk menghitung total akumulasi_2020
$queryTotalAkum2020 = "SELECT SUM(akum_2020) AS total_akum2020 FROM barang";
$resultTotalAkum2020 = mysqli_query($conn, $queryTotalAkum2020);

if ($resultTotalAkum2020) {
    $rowTotalAkum2020 = mysqli_fetch_assoc($resultTotalAkum2020);
    $total_akum2020 = $rowTotalAkum2020['total_akum2020'];
} else {
    $total_akum2020 = 0; // Default value jika query error
}

// Query untuk mengambil total jumlah barang masuk dari tabel barang
$queryBarangMasuk = "SELECT COUNT(*) AS total_masuk FROM barang";
$resultBarangMasuk = mysqli_query($conn, $queryBarangMasuk);
$rowBarangMasuk = mysqli_fetch_assoc($resultBarangMasuk);
$totalBarangMasuk = $rowBarangMasuk['total_masuk'];

// Query untuk mengambil total jumlah barang keluar dari tabel barang_keluar
$queryBarangKeluar = "SELECT COUNT(*) AS total_keluar FROM barang_keluar";
$resultBarangKeluar = mysqli_query($conn, $queryBarangKeluar);
$rowBarangKeluar = mysqli_fetch_assoc($resultBarangKeluar);
$totalBarangKeluar = $rowBarangKeluar['total_keluar'];

// Query ambil tahun_perolehan
$query = "SELECT nama_barang, SUM(volume) AS total_transaksi FROM barang GROUP BY nama_barang";
$result = mysqli_query($conn, $query);
$transaksiPertahun = array();
while ($row = mysqli_fetch_assoc($result)) {
    $transaksiPertahun[$row['nama_barang']] = $row['total_transaksi'];
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Buku Inventaris JDS</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/Logo-JDS.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                Buku Inventaris
            </a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#">
                <i class="fas fa-bars"></i>
            </button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                    <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="barang.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Data Barang
                            </a>
                            <a class="nav-link" href="data_kode_barang.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Kode Barang
                            </a>
                            <div class="sb-sidenav-menu-heading">History</div>
                            <a class="nav-link" href="barang_keluar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Data Keluar
                            </a>
                            <!-- Garis pembatas -->
                            <div class="sb-sidenav-menu-heading">Logout</div>
                            <a class="nav-link" href="logout.php" onclick="return confirmLogout()">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Keluar
                            </a>
                            <script>
                                function confirmLogout() {
                                    return confirm("Apakah Anda yakin ingin logout?");
                                }
                            </script>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Penatausahaan Barang Milik Daerah</h1>
                        <h3 class="mt-4">UPTD Pusat Layanan Digital, Data dan Informasi Geospasial</h3>
                        <div class="card mb-4">
                            <main>
                                <div class="container-fluid">
                                    <h1 class="mt-4">Dashboard</h1>
                                    <div class="row">
                                        <!-- Total Data Barang -->
                                        <div class="col-xl-6 col-md-6">
                                            <div class="card bg-primary text-white mb-4">
                                                <div class="card-body">
                                                    <h5>Total Data Barang</h5>
                                                    <h1><?php echo $total_volume; ?></h1>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Total Biaya -->
                                        <div class="col-xl-6 col-md-6">
                                            <div class="card bg-warning text-white mb-4">
                                                <div class="card-body">
                                                    <h5 class="mb-3" style="font-size: 22px;">Total Harga Barang</h5>
                                                    <h1 style="font-size: 32px;"><?php echo 'Rp.' . number_format($total_biaya, 2); ?></h1>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Total Akumulasi 2020 -->
                                        <div class="col-xl-6 col-md-6">
                                            <div class="card bg-success text-white mb-4">
                                                <div class="card-body">
                                                    <h5 class="mb-3" style="font-size: 20px;">Akum Penyusutan Harga 2020</h5>
                                                    <h1 style="font-size: 32px;"><?php echo 'Rp.' . number_format($total_akum2020, 2); ?></h1>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Total Akumulasi 2021 -->
                                        <div class="col-xl-6 col-md-6">
                                            <div class="card bg-success text-white mb-4">
                                                <div class="card-body">
                                                    <h5 class="mb-3" style="font-size: 20px;">Akum Penyusutan Harga 2021</h5>
                                                    <h1 style="font-size: 32px;"><?php echo 'Rp.' . number_format($total_akum2021, 2); ?></h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <style>
                                .chart-container {
                                    display: flex;
                                    justify-content: space-between;
                                }
                                .chart-card {
                                    flex: 1;
                                    margin-right: 10px;
                                    }
                                </style>
                                
                                <div class="chart-container">
                                    <!-- Diagram Batang (Total Transaksi Barang Pertahun) -->
                                    <div class="chart-card">
                                        <div class="card mb-4">
                                            <div class="card-header">
                                                <i class="fas fa-chart-bar mr-1"></i>
                                                Total Jumlah Jenis Barang
                                            </div>
                                            <div class="card-body">
                                                <canvas id="barChart" width="950" height="359"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                // Inisialisasi Diagram Batang
                                var ctxBar = document.getElementById('barChart').getContext('2d');
                                var barChart = new Chart(ctxBar, {
                                    type: 'bar', // Mengubah tipe chart menjadi 'bar'
                                    data: {
                                        labels: <?php echo json_encode(array_keys($transaksiPertahun)); ?>,
                                        datasets: [{
                                            label: 'Total Jumlah Jenis Barang',
                                            data: <?php echo json_encode(array_values($transaksiPertahun)); ?>,
                                            backgroundColor: 'rgb(75, 192, 192)',
                                            borderColor: 'rgb(75, 192, 192)',
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        responsive: true,
                                        maintainAspectRatio: false,
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                });
                                </script>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
                <script src="js/scripts.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
                <script src="assets/demo/chart-area-demo.js"></script>
                <script src="assets/demo/chart-bar-demo.js"></script>
                <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
                <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
                <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>