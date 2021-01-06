<?php session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$query = mysqli_query($koneksi, "select * from admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($query);

if ($cek) {
    $_SESSION['username']=$username;
    ?><script language="javascript">document.location.href="beranda.html";</script><?php
    
}
else {
    ?><script language="javascript"> window.location="login.html";</script><?php
    
}
?>