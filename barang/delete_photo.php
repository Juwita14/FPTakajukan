<?php
    require "../checker.php";
    require "../koneksi.php";
    if(isset($_GET['id'])){
        $_GET['id'] = mysqli_real_escape_string($db_connection, $_GET['id']);
        $r = mysqli_query($db_connection, "SELECT link_gambar, id_barang FROM gambar WHERE id_gambar = ".$_GET['id']);
        $data = mysqli_fetch_array($r, MYSQLI_ASSOC);
        // die(var_dump($data));

        unlink('../file/'.$data['link_gambar']);

        $q = mysqli_query($db_connection, "DELETE FROM gambar WHERE id_gambar = ".$_GET['id']);
        header("Location: edit.php?id=".$data['id_barang']);
    }
?>