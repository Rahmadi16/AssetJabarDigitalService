<?php
require 'koneksi.php';

// Query untuk mendapatkan data kode_barang dan nama_barang dari tabel kode_barang
$query_kode_barang = "SELECT kode_barang, nama_barang FROM kode_barang";
$result_kode_barang = mysqli_query($conn, $query_kode_barang);

$kode_barang_options = array();
while ($row_kode_barang = mysqli_fetch_assoc($result_kode_barang)) {
    $kode_barang_options[] = $row_kode_barang;
}

// Jika form dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jumlah_data = $_POST['jumlah_data'];

    for ($i = 0; $i < $jumlah_data; $i++) {
        $kode_barang = $_POST['kode_barang'];
        $nama_barang = $_POST['nama_barang'];
        $merk = $_POST['merk'];
        $spesifikasi = $_POST['spesifikasi'];
        $no_jumlah = $_POST['no_jumlah'];
        $no_mesin = $_POST['no_mesin'];
        $no_polisi = $_POST['no_polisi'];
        $tahun_perolehan = $_POST['tahun_perolehan'];
        $satuan = $_POST['satuan'];
        $volume = $_POST['volume'];
        $harga_satuan = $_POST['harga_satuan'];
        $keterangan = $_POST['keterangan'];
        $u_ekonomis = $_POST['u_ekonomis'];
        $akum_2020 = $_POST['akum_2020'];
        $akum_2021 = $_POST['akum_2021'];
        $beban_2021 = $_POST['beban_2021'];

        // Query untuk menyimpan data ke database
        $query = "INSERT INTO barang (kode_barang, nama_barang, merk, spesifikasi, no_jumlah, no_mesin, no_polisi, tahun_perolehan, satuan, volume, harga_satuan, keterangan, u_ekonomis, akum_2020, akum_2021, beban_2021)
                VALUES ('$kode_barang', '$nama_barang', '$merk', '$spesifikasi', '$no_jumlah', '$no_mesin', '$no_polisi', '$tahun_perolehan', '$satuan', '$volume', '$harga_satuan', '$keterangan', '$u_ekonomis', '$akum_2020', '$akum_2021', '$beban_2021')";

        if (mysqli_query($conn, $query)) {
            header('Location: barang.php'); // Redirect kembali ke halaman data barang
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Tambah Data Barang</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div id="konfirmasiModal" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Konfirmasi Kembali</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Apakah Anda yakin ingin kembali?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                            <a href="barang.php" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="mt-4 mb-3">Tambah Data Barang</h1>
            <a href="barang.php" class="btn btn-secondary mb-3" data-toggle="modal" data-target="#konfirmasiModal">Kembali</a>
            <a href="data_kode_barang.php" class="btn btn-success mb-3">Data Kode Barang</a>
            <form method="post">
                <div class="form-group">
                    <div class="form-group">
                        <label for="kode_barang">Kode Barang</label>
                        <select name="kode_barang" id="kode_barang" class="custom-select form-control">
                            <option selected>Pilih Kode Barang</option>
                            <?php
                            foreach ($kode_barang_options as $kode_barang_option) {
                                echo '<option value="' . $kode_barang_option['kode_barang'] . '">' . $kode_barang_option['kode_barang'] . '</option>';
                            }
                            ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" readonly>
                        </div>
                        <script>
                        document.getElementById("kode_barang").addEventListener("change", function() {
                            var kodeBarangSelect = document.getElementById("kode_barang");
                            var namaBarangInput = document.getElementById("nama_barang");
                            var selectedKodeBarang = kodeBarangSelect.value;
                            var selectedNamaBarang = "";
                
                            // Menentukan nama barang berdasarkan kode barang yang dipilih
                            switch (selectedKodeBarang) {
                                <?php
                                // Buat loop untuk mencetak pernyataan JavaScript berdasarkan data kode barang dari database
                                foreach ($kode_barang_options as $kode_barang_option) {
                                    echo 'case "' . $kode_barang_option['kode_barang'] . '":';
                                    echo 'selectedNamaBarang = "' . $kode_barang_option['nama_barang'] . '";';
                                    echo 'break;';
                                }
                                ?>
                                }

                                // Mengisi kolom "Nama Barang" dengan pilihan yang sesuai
                                namaBarangInput.value = selectedNamaBarang;
                            });
                            </script>
                            <div class="form-group">
                                <label for="merk">Merk</label>
                                <input type="text" class="form-control" id="merk" name="merk" required>
                            </div>
                            <div class="form-group">
                                <label for="spesifikasi">Spesifikasi</label>
                                <input type="text" class="form-control" id="spesifikasi" name="spesifikasi" required>
                            </div>
                            <div class="form-group">
                                <label for="no_jumlah">Nomor Rangka / Jumlah Barang</label>
                                <input type="text" class="form-control" id="no_jumlah" name="no_jumlah" required>
                            </div>
                            <div class="form-group">
                                <label for="no_mesin">Nomor Mesin</label>
                                <input type="text" class="form-control" id="no_mesin" name="no_mesin" required>
                            </div>
                            <div class="form-group">
                                <label for="no_polisi">Nomor Polisi</label>
                                <input type="text" class="form-control" id="no_polisi" name="no_polisi" required>
                            </div>
                            <div class="form-group">
                                <label for="tahun_perolehan">Tahun Perolehan</label>
                                <input type="number" class="form-control" id="tahun_perolehan" name="tahun_perolehan" required>
                            </div>
                            <div class="form-group">
                                <label for="satuan">Satuan</label>
                                <input type="text" class="form-control" id="satuan" name="satuan" required>
                            </div>
                            <div class="form-group">
                                <label for="volume">Volume</label>
                                <input type="text" class="form-control" id="volume" name="volume" required>
                            </div>
                            <div class="form-group">
                                <label for="harga_satuan">Harga Satuan (Rp)</label>
                                <input type="number" class="form-control" id="harga_satuan" name="harga_satuan" required>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                            </div>
                            <div class="form-group">
                                <label for="u_ekonomis">Umur Ekonomis</label>
                                <input type="text" class="form-control" id="u_ekonomis" name="u_ekonomis" required>
                            </div>
                            <div class="form-group">
                                <label for="akum_2020">Akumulasi Penyusutan Tahun 2020</label>
                                <input type="text" class="form-control" id="akum_2020" name="akum_2020" required>
                            </div>
                            <div class="form-group">
                                <label for="akum_2021">Akumulasi Penyusutan Tahun 2021</label>
                                <input type="text" class="form-control" id="akum_2021" name="akum_2021" required>
                            </div>
                            <div class="form-group">
                                <label for="beban_2021">Beban Penyusutan Tahun 2021</label>
                                <input type="text" class="form-control" id="beban_2021" name="beban_2021" required>
                            </div>
                            <div class="form-group">
                                <label for="jumlah_data">Jumlah Data</label>
                                <input type="number" class="form-control" id="jumlah_data" name="jumlah_data" required>
                            </div>
                            <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                        </form>
                    </div>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                    <script>
                    // Ambil elemen input yang diperlukan
                    var akum2020Input = document.getElementById('akum_2020');
                    var akum2021Input = document.getElementById('akum_2021');
                    var beban2021Input = document.getElementById('beban_2021');

                    // Tambahkan event listener pada input akumulasi penyusutan
                    akum2020Input.addEventListener('input', hitungBeban2021);
                    akum2021Input.addEventListener('input', hitungBeban2021);

                    // Fungsi untuk menghitung beban penyusutan tahun 2021
                    function hitungBeban2021() {
                        var akum2020 = parseFloat(akum2020Input.value);
                        var akum2021 = parseFloat(akum2021Input.value);
                        var beban2021 = akum2021 - akum2020;
                        beban2021Input.value = beban2021.toFixed(2);
                    }
                    </script>
    </body>
</html>