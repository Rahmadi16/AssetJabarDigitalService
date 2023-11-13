<?php
require 'koneksi.php';
require 'cek.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Buku Inventaris JDS</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                <div class="container-fluid">
                    <h1 class="my-4">Data Kode Barang</h1>
            <a href="tambah_kode_barang.php" class="btn btn-primary mb-3">Tambah Kode Barang</a>
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th scope="col">Kode Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Buat koneksi ke database
                    $host = "localhost";
                    $username = "username";
                    $password = "password";
                    $database = "stockbarang";

                    $conn = mysqli_connect($host, $username, $password, $database);

                    if (!$conn) {
                        die("Koneksi database gagal: " . mysqli_connect_error());
                    }
                    
                    // Query untuk mengambil data kode barang dan nama barang dari database
                    $sql = "SELECT * FROM kode_barang"; // Ganti nama_tabel_kode_barang sesuai dengan nama tabel sebenarnya
                    $result = mysqli_query($conn, $sql);

                    $no = 1;
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>' . $no . '</td>';
                            echo '<td>' . $row['kode_barang'] . "</td>";
                            echo '<td>' . $row['nama_barang'] . "</td>";
                            echo '<td>';
                            echo '<button onclick="openDeleteModal(' . $row['idx'] . ')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>';
                            echo '</td>';
                            echo '</tr>';

                            $no++;
                        }
                    } else {
                        echo "Error in query: " . mysqli_error($conn);
                    }
                    ?>
                    </tbody>
                    <?php
                    if (isset($_POST['delete_data'])) {
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "kode_barang";

                        $conn = new mysqli($servername, $username, $password, $dbname);
                        if ($conn->connect_error) {
                            die("Koneksi gagal: " . $conn->connect_error);
                        }

                        // Query untuk menghapus data dari "kode_barang"
                        $sql = "DELETE FROM kode_barang";
                        if ($conn->query($sql) === TRUE) {
                            echo "Data berhasil dihapus dari database kode_barang.";
                        } else {
                            echo "Error saat menghapus data: " . $conn->error;
                        }

                        $conn->close();
                    }
                    ?>
                    </table>
                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Penghapusan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah Anda yakin ingin menghapus data ini?</p>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="button" class="btn btn-danger" onclick="deleteData()">Hapus</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                    let deleteRowIdx; // Variabel untuk menyimpan indeks baris yang akan dihapus
                    function openDeleteModal(idx) {
                        deleteRowIdx = idx;
                        $('#deleteModal').modal('show');
                    }

                    function deleteData() {
                        // Lakukan proses penghapusan di sini (menggunakan AJAX atau bentuk lain sesuai kebutuhan)

                        // Setelah penghapusan berhasil, pindahkan data ke halaman "barang_keluar.php"
                        window.location.href = 'hapus_data_kode_barang.php?idx=' + deleteRowIdx;
                    }
                    </script>
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
