<?php 
    include('../koneksi.php');
    //cek apakah sudah di tekan tobol daftarnya

    //ambil data dari formulir
    $id = $_GET['id'];
    $nama = $_POST['nama_barang'];
    $stok = $_POST['stok_barang'];
    $harga = $_POST['harga_barang'];

    $sql = "update barang set nama_barang = '$nama', stok_barang = '$stok', harga_barang = '$harga' where id_barang = $id";
    // echo $sql;
    $query = mysqli_query($db_connection, $sql);
    // die(var_dump(mysqli_error($db_connection)));
    header('Location: data.php');
?>