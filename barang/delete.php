<?php 
    require "../checker.php";
    require "../koneksi.php";
    
    if (! isset($_GET['id'])) {
        header('Location: data.php');
    }

    $id = $_GET['id'];
    $sql = 'delete from barang where id_barang='.$id;
    $query = mysqli_query($db_connection, $sql);

    header('Location: data.php');
?>