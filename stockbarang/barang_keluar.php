<?php
require 'koneksi.php';
require 'cek.php';

if (isset($_GET['idx']) && isset($_GET['reason'])) {
    $deletedIdx = $_GET['idx'];
    $deletionReason = $_GET['reason'];

    // Fetch data of the deleted item from the barang table
    $fetchDeletedItemQuery = "SELECT kode_barang, nama_barang, merk, volume, harga_satuan FROM barang WHERE idx = '$deletedIdx'";
    $result = mysqli_query($conn, $fetchDeletedItemQuery);

    if ($result) {
        $deletedItem = mysqli_fetch_assoc($result);

        // Insert the deleted item into the barang_keluar table
        $insertIntoKeluarQuery = "INSERT INTO barang_keluar (kode_barang, nama_barang, merk, volume, harga_satuan, alasan, tanggal_keluar)
            VALUES ('" . $deletedItem['kode_barang'] . "', '" . $deletedItem['nama_barang'] . "', '" . $deletedItem['merk'] . "', 
            '" . $deletedItem['volume'] . "', '" . $deletedItem['harga_satuan'] . "', '$deletionReason', NOW())";

        // Delete the item from the barang table
        $deleteFromBarangQuery = "DELETE FROM barang WHERE idx = '$deletedIdx'";
        
        $insertResult = mysqli_query($conn, $insertIntoKeluarQuery);
        $deleteResult = mysqli_query($conn, $deleteFromBarangQuery);

        if ($insertResult && $deleteResult) {
            echo "Data berhasil dipindahkan dan dihapus dari database barang.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Error in query: " . mysqli_error($conn);
    }
}

// Tampilkan data barang_keluar
$query_barang_keluar = "SELECT * FROM barang_keluar";
$result_barang_keluar = mysqli_query($conn, $query_barang_keluar);
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
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/Logo-JDS.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                Buku Inventaris
            </a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <!-- Navbar-->
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
                <div class="container-fluid">
                    <h1 class="mt-4">Data Barang Keluar</h1>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Data Barang Keluar
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Merk</th>
                                            <th>Volume</th>
                                            <th>Harga Satuan (Rp)</th>
                                            <th>Alasan</th>
                                            <th>Tanggal Keluar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Tampilkan data barang_keluar dalam tabel
                                        $no = 1;
                                        while ($row = mysqli_fetch_assoc($result_barang_keluar)) {
                                            echo '<tr>';
                                            echo '<td>' . $no . '</td>';
                                            echo '<td>' . $row['kode_barang'] . '</td>';
                                            echo '<td>' . $row['nama_barang'] . '</td>';
                                            echo '<td>' . $row['merk'] . '</td>';
                                            echo '<td>' . $row['volume'] . '</td>';
                                            echo '<td>' . number_format($row['harga_satuan'], 3, ',', '.') . '</td>';
                                            echo '<td>' . $row['alasan'] . '</td>';
                                            echo '<td>' . $row['tanggal_keluar'] . '</td>';
                                            echo '</tr>';

                                            $no++;
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Skrip JavaScript yang dibutuhkan (seperti jQuery, Bootstrap, dll.) -->
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
