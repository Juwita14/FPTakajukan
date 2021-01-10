<?php
    include('../koneksi.php');
    var_dump($_POST);
    $nama = $_POST['nama'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];


    $sql = "insert into barang (nama_barang, stok_barang, harga_barang) values('$nama', '$stok', '$harga')";
    $query = mysqli_query($db_connection, $sql);

    if ($query) {
        header('Location: data.php');
    }
?>