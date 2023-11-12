<!doctype html>
<html class="no-js" lang="en">

<?php
require 'koneksi.php';
?>
<head>
    <title>*Data Stock Bahan</title>
    <link rel="icon"
    type="image/png"
    href="favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-144808195-1');
    </script>
    </head>
    <style>
    @page {
        size: landscape;
    }
    </style>
    <body>
        <div class="container">
            <h2>Stock Bahan</h2>
            <h4>(Inventory)</h4>
            <div class="data-tables datatable-dark">
                <table id="dataTable3" class="display" style="width:100%"><thead class="thead-dark">
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
                        <th>Akumulasi Penyusutan Takun 2020</th>
                        <th>Akumulasi Penyusutan Tahun 2021</th>
                        <th>Beban Penyusutan Tahun 2021</th>
												
                        <!--<th>Opsi</th>-->
                    </tr></thead><tbody>
                        <?php 
                        $brgs=mysqli_query($conn,"SELECT * from barang order by idx ASC");
                        $no=1;
                        while($p=mysqli_fetch_array($brgs)){
                        ?>
                        
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $p['kode_barang'] ?></td>
                            <td><?php echo $p['nama_barang'] ?></td>
                            <td><?php echo $p['merk'] ?></td>
                            <td><?php echo $p['spesifikasi'] ?></td>
                            <td><?php echo $p['no_jumlah'] ?></td>
                            <td><?php echo $p['no_mesin'] ?></td>
                            <td><?php echo $p['no_polisi'] ?></td>
                            <td><?php echo $p['tahun_perolehan'] ?></td>
                            <td><?php echo $p['satuan'] ?></td>
                            <td><?php echo $p['volume'] ?></td>
                            <td><?php echo $p['harga_satuan'] ?></td>
                            <td><?php echo $p['keterangan'] ?></td>
                            <td><?php echo $p['u_ekonomis'] ?></td>
                            <td><?php echo $p['akum_2020'] ?></td>
                            <td><?php echo $p['akum_2021'] ?></td>
                            <td><?php echo $p['beban_2021'] ?></td>
                        </tr>
                        <?php 
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
            <script>
            $(document).ready(function() {
                var table = $('#dataTable3').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'excel', 'print',
                    ],
                    initComplete: function () {
                        this.api().columns().every( function () {
                            var column = this;
                            var select = $('<select><option value=""></option></select>')
                            .appendTo( $(column.footer()).empty() )
                            .on( 'change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                    );

                                    column
                                    .search( val ? '^'+val+'$' : '', true, false )
                                    .draw();
                                } );

                                column.data().unique().sort().each( function ( d, j ) {
                                    select.append( '<option value="'+d+'">'+d+'</option>' )
                                } );
                            } );
                        }
                    } );
                });
                </script>
    </body>
</html>
