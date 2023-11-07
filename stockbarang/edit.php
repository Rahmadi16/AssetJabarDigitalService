<?php
require 'koneksi.php';

// Ambil data barang yang akan diedit berdasarkan kode_barang
if (isset($_GET['idx'])) {
    $idx = $_GET['idx'];
    $query = "SELECT * FROM barang WHERE idx = '$idx'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
}

// Jika form dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Query untuk update data barang ke database
    $query = "UPDATE barang SET
              kode_barang = '$kode_barang',
              nama_barang = '$nama_barang',
              merk = '$merk',
              spesifikasi = '$spesifikasi',
              no_jumlah = '$no_jumlah',
              no_mesin = '$no_mesin',
              no_polisi = '$no_polisi',
              tahun_perolehan = '$tahun_perolehan',
              satuan = '$satuan',
              volume = '$volume',
              harga_satuan = '$harga_satuan',
              keterangan = '$keterangan',
              u_ekonomis = '$u_ekonomis',
              akum_2020 = '$akum_2020',
              akum_2021 = '$akum_2021',
              beban_2021 = '$beban_2021'
              WHERE idx = '$idx'";

    if (mysqli_query($conn, $query)) {
        header('Location: barang.php'); // Redirect kembali ke halaman data barang setelah update
    } else {
        echo "Error: " . mysqli_error($conn);
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
    <title>Edit Data Barang</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .flex-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="flex-container">
            <h1 class="mt-4">Edit Data Barang</h1>
            <a href="barang.php" class="btn btn-danger">Kembali ke Data Barang</a>
        </div>
    </div>
    
    <div class="container mt-4">
        <form method="post">
            <div class="form-group">
                <label for="kode_barang">Kode Barang</label>
                <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="<?php echo $row['kode_barang']; ?>" required>
            </div>
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $row['nama_barang']; ?>" required>
            </div>
            <div class="form-group">
                <label for="merk">Merk</label>
                <input type="text" class="form-control" id="merk" name="merk" value="<?php echo $row['merk']; ?>" required>
            </div>
            <div class="form-group">
                <label for="spesifikasi">Spesifikasi</label>
                <input type="text" class="form-control" id="spesifikasi" name="spesifikasi" value="<?php echo $row['spesifikasi']; ?>" required>
            </div>
            <div class="form-group">
                <label for="no_jumlah">Nomor Rangka / Jumlah Barang</label>
                <input type="text" class="form-control" id="no_jumlah" name="no_jumlah" value="<?php echo $row['no_jumlah']; ?>" required>
            </div>
            <div class="form-group">
                <label for="no_mesin">Nomor Mesin</label>
                <input type="text" class="form-control" id="no_mesin" name="no_mesin" value="<?php echo $row['no_mesin']; ?>" required>
            </div>
            <div class="form-group">
                <label for="no_polisi">Nomor Polisi</label>
                <input type="text" class="form-control" id="no_polisi" name="no_polisi" value="<?php echo $row['no_polisi']; ?>" required>
            </div>
            <div class="form-group">
                <label for="tahun_perolehan">Tahun Perolehan</label>
                <input type="number" class="form-control" id="tahun_perolehan" name="tahun_perolehan" value="<?php echo $row['tahun_perolehan']; ?>" required>
            </div>
            <div class="form-group">
                <label for="satuan">Satuan</label>
                <input type="text" class="form-control" id="satuan" name="satuan" value="<?php echo $row['satuan']; ?>" required>
            </div>
            <div class="form-group">
                <label for="volume">Volume</label>
                <input type="number" class="form-control" id="volume" name="volume" value="<?php echo $row['volume']; ?>" required>
            </div>
            <div class="form-group">
                <label for="harga_satuan">Harga Satuan</label>
                <input type="number" class="form-control" id="harga_satuan" name="harga_satuan" value="<?php echo $row['harga_satuan']; ?>" required>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $row['keterangan']; ?>" required>
            </div>
            <div class="form-group">
                <label for="u_ekonomis">Umur Ekonomis</label>
                <input type="text" class="form-control" id="u_ekonomis" name="u_ekonomis" value="<?php echo $row['u_ekonomis']; ?>" required>
            </div>
            <div class="form-group">
                <label for="akum_2020">Akumulasi Penyusutan Tahun 2020</label>
                <input type="text" class="form-control" id="akum_2020" name="akum_2020" value="<?php echo $row['akum_2020']; ?>" required>
            </div>
            <div class="form-group">
                <label for="akum_2021">Akumulasi Penyusutan Tahun 2021</label>
                <input type="text" class="form-control" id="akum_2021" name="akum_2021" value="<?php echo $row['akum_2021']; ?>" required>
            </div>
            <div class="form-group">
                <label for="beban_2021">Beban Penyusutan Tahun 2021</label>
                <input type="text" class="form-control" id="beban_2021" name="beban_2021" value="<?php echo $row['beban_2021']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</body>
</html>
