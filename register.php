<?php
    include('koneksi.php');
    var_dump($_POST);
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "insert into user (username, password) values('$username', '$password')";
    $query = mysqli_query($db_connection, $sql);

    if ($query) {
        echo "<p>penambahan user: $username berhasil</p>";
        header('location: index.html');
    }
?>