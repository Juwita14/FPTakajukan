<?php
    session_start();

    require('koneksi.php');
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "insert into user (username, password) values ('$username', '$password')";
    $query = mysqli_query($db_connection, $sql);

    if ($query) {
        $_SESSION['username'] = $username;
        header('Location: beranda.php');
    }
?>