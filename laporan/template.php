<?php
    function rupiah($int){
        $hasil_rupiah = "Rp " . number_format($int,2,',','.');
        return $hasil_rupiah;
    }
    require "../koneksi.php";

    if(!isset($_GET['id'])) header('Location: /laporan/index.php');
    $_GET['id'] = mysqli_real_escape_string($db_connection, $_GET['id']);

    $trx = mysqli_fetch_all(mysqli_query($db_connection, "SELECT * FROM transaksi WHERE id_barang = ".$_GET['id']), MYSQLI_ASSOC);
    $brg = mysqli_fetch_all(mysqli_query($db_connection, "SELECT * FROM barang WHERE id_barang = ".$_GET['id']), MYSQLI_ASSOC);
?>

<table>
    <tr>
        <td>Nama Barang</td>
        <td><b><?= $brg[0]['nama_barang'] ?></b></td>
    </tr>
    <tr>
        <td>Harga Barang</td>
        <td><b><?= rupiah($brg[0]['harga_barang']) ?></b></td>
    </tr>
    <tr>
        <td>Stok Barang</td>
        <td><b><?= $brg[0]['stok_barang'] ?> buah</b></td>
    </tr>
</table>

<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Banyak Laporan</th>
            <th>Jenis Laporan</th>
            <th>Waktu Laporan</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $i = 1;
            foreach ($trx as $t):
        ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= abs($t['jumlah_transaksi']) ?> buah</td>
            <td><?= ($t['jumlah_transaksi'] > 0) ? "<div class='label label-success'>Barang Masuk</div>" : "<div class='label label-danger'>Barang Keluar</div>" ?></td>
            <td><?= $t['waktu_transaksi'] ?></td>
        </tr>
        <?php $i++; endforeach; ?>
    </tbody>
</table>