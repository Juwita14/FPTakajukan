<?php
    require "../checker.php";
    require "../koneksi.php";

    if($_POST){
        $id_barang = $_POST['id_barang'];
        if($_POST['jenis_transaksi'] == 1){
            $jumlah = $_POST['jumlah_transaksi'];
        }else{
            $jumlah = -$_POST['jumlah_transaksi'];
        }
    }

    $q = mysqli_query($db_connection, "UPDATE barang SET stok_barang = stok_barang + ".$jumlah." WHERE id_barang = ".$_POST['id_barang']);
    // die(mysqli_error($db_connection));
    $q2 = mysqli_query($db_connection, "INSERT INTO transaksi (id_barang, jumlah_transaksi) VALUES (".$id_barang.", ".$jumlah.")");
    // die(mysqli_error($db_connection));

    header('Location: /transaksi/index.php');
?>