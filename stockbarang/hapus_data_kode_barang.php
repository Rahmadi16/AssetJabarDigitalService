<?php
require 'koneksi.php';
require 'cek.php';

if (isset($_GET['idx'])) {
    $idx = $_GET['idx'];

    // Hapus data dari tabel barang
    $query_hapus = "DELETE FROM kode_barang WHERE idx = '$idx'";

    if (mysqli_query($conn, $query_hapus)) {
        header('Location: data_kode_barang.php'); // Redirect kembali ke halaman barang.php
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>