<?php
require 'koneksi.php';
require 'cek.php';
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
                    <h1 class="mt-4">Data Barang</h1>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Data Barang Masuk
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="mb-3">
                                    <a href="tambah_barang.php" class="btn btn-primary">Tambah Barang</a>
                                    <a href="exportdata.php" target="_blank" class="btn btn-info">Export Data</a>
                                </div>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Merk/Type</th>
                                            <th>Spesifikasi</th>
                                            <th>Nomor Rangka/Jumlah Barang</th>
                                            <th>Nomor Mesin</th>
                                            <th>Nomor Polisi</th>
                                            <th>Tahun Perolehan</th>
                                            <th>Satuan</th>
                                            <th>Volume</th>
                                            <th>Harga Satuan (Rp)</th>
                                            <th>Keterangan</th>
                                            <th>Umur Ekonomis</th>
                                            <th>Akumulasi Penyusutan Tahun 2020</th>
                                            <th>Akumulasi Penyusutan Tahun 2021</th>
                                            <th>Beban Penyusutan Tahun 2021</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        // Ambil data dari database dan tampilkan dalam tabel
                                        $query = "SELECT * FROM barang";
                                        $result = mysqli_query($conn, $query);
                            
                                        $no = 1;
                                        if ($result) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<tr>';
                                                echo '<td>' . $no . '</td>';
                                                echo '<td>' . $row['kode_barang'] . '</td>';
                                                echo '<td>' . $row['nama_barang'] . '</td>';
                                                echo '<td>' . $row['merk'] . '</td>';
                                                echo '<td>' . $row['spesifikasi'] . '</td>';
                                                echo '<td>' . $row['no_jumlah'] . '</td>';
                                                echo '<td>' . $row['no_mesin'] . '</td>';
                                                echo '<td>' . $row['no_polisi'] . '</td>';
                                                echo '<td>' . $row['tahun_perolehan'] . '</td>';
                                                echo '<td>' . $row['satuan'] . '</td>';
                                                echo '<td>' . $row['volume'] . '</td>';
                                                $harga_satuan = str_replace('.', '', $row['harga_satuan']); 
                                                $harga_satuan = str_replace(',', '.', $harga_satuan); 
                                                $harga_satuan = floatval($harga_satuan); 
                                                echo '<td>' . number_format($harga_satuan, 2, ',', '.') . '</td>';
                                                echo '<td>' . $row['keterangan'] . '</td>';
                                                echo '<td>' . $row['u_ekonomis'] . '</td>';
                                                $akum_2020 = str_replace('.', '', $row['akum_2020']); 
                                                $akum_2020 = str_replace(',', '.', $akum_2020); 
                                                $akum_2020 = floatval($akum_2020); 
                                                echo '<td>' . number_format($akum_2020, 2, ',', '.') . '</td>';
                                                $akum_2021 = str_replace('.', '', $row['akum_2021']); 
                                                $akum_2021 = str_replace(',', '.', $akum_2021); 
                                                $akum_2021 = floatval($akum_2021); 
                                                echo '<td>' . number_format($akum_2021, 2, ',', '.') . '</td>';
                                                $beban_2021 = str_replace('.', '', $row['beban_2021']); 
                                                $beban_2021 = str_replace(',', '.', $beban_2021); 
                                                $beban_2021 = floatval($beban_2021); 
                                                echo '<td>' . number_format($beban_2021, 2, ',', '.') . '</td>';
                                                echo '<td>';
                                                echo '<a href="edit.php?idx=' . $row['idx'] . '" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>';
                                                echo '<button onclick="openDeleteModal(' . $row['idx'] . ')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>';
                                                echo '</td>';
                                                echo '</tr>';

                                                $no++;
                                            }
                                        } else {
                                            // Tampilkan pesan kesalahan query
                                            echo "Error in query: " . mysqli_error($conn);
                                        }
                                        ?>
                                        </tbody>
                                        <?php
                                        if (isset($_POST['move_data'])) {
                                            $servername1 = "localhost";
                                            $username1 = "root";
                                            $password1 = "";
                                            $dbname1 = "barang";

                                            $conn1 = new mysqli($servername1, $username1, $password1, $dbname1);
                                            if ($conn1->connect_error) {
                                                die("Koneksi gagal: " . $conn1->connect_error);
                                            }

                                            $servername2 = "localhost";
                                            $username2 = "root";
                                            $password2 = "";
                                            $dbname2 = "barang_keluar";

                                            $conn2 = new mysqli($servername2, $username2, $password2, $dbname2);
                                            if ($conn2->connect_error) {
                                                die("Koneksi gagal: " . $conn2->connect_error);
                                            }

                                            // Query untuk mengambil data yang akan dipindahkan
                                            $sql = "SELECT * FROM barang";
                                            $result = $conn1->query($sql);

                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    // Ambil data yang akan dipindahkan
                                                    $kode_barang = $row['kode_barang'];
                                                    $nama_barang = $row['nama_barang'];
                                                    $merk = $row['merk'];
                                                    $volume = $row['$volume'];
                                                    $harga_satuan = $row['$harga_satuan'];
                                                    // Sisipkan data-data lain yang diperlukan

                                                    // Query untuk memasukkan data ke "barang_keluar"
                                                    $insert_sql = "INSERT INTO barang_keluar (kode_barang, nama_barang, merk, spesifikasi, no_jumlah, no_mesin, no_polisi, tahun_perolehan, satuan, volume, harga_satuan, keterangan, u_ekonomis, akum_2020, akum_2021, beban_2021)
                                                    VALUES ('$kode_barang', '$nama_barang', '$merk', '$spesifikasi', '$no_jumlah', '$no_mesin', '$no_polisi', '$tahun_perolehan', '$satuan', '$volume', '$harga_satuan', '$keterangan', '$u_ekonomis', '$akum_2020', '$akum_2021', '$beban_2021')";
                                                    if ($conn2->query($insert_sql) === TRUE) {
                                                        // Data berhasil dimasukkan ke "barang_keluar"

                                                        // Hapus data dari "barang"
                                                        $delete_sql = "DELETE FROM barang WHERE kode_barang = '$kode_barang'"; 
                                                        if ($conn1->query($delete_sql) === TRUE) {
                                                            echo "Data berhasil dipindahkan dan dihapus dari database pertama.";
                                                        } else {
                                                            echo "Error saat menghapus data: " . $conn1->error;
                                                        }
                                                    } else {
                                                        echo "Error saat memasukkan data: " . $conn2->error;
                                                    }
                                                }
                                            } else {
                                                echo "Tidak ada data yang ditemukan di database A.";
                                            }

                                            $conn1->close();
                                            $conn2->close();
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
                                                        <textarea id="deleteReason" class="form-control" placeholder="Masukkan alasan penghapusan" rows="4"></textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <button type="button" class="btn btn-danger" onclick="deleteData()">Hapus</button>
                                                    </div>
                                                </div>
                                            </div>
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
                            const reason = document.getElementById('deleteReason').value;

                            // Lakukan proses penghapusan di sini (menggunakan AJAX atau bentuk lain sesuai kebutuhan)

                            // Setelah penghapusan berhasil, pindahkan data ke halaman "barang_keluar.php"
                            window.location.href = 'barang_keluar.php?idx=' + deleteRowIdx + '&reason=' + encodeURIComponent(reason);
                            }
                            </script>
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
