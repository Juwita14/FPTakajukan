<?php
    require "../checker.php";
    require "../koneksi.php";

    if(!isset($_GET['id'])) header('Location: /laporan/index.php');

    $randhash = md5(random_int(0, 999999999));
    $file = $randhash.'_'.time();
    $site = $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . '/laporan/';
    // $site = 'google.com?';

    $payload = escapeshellcmd("python3 print.py 'http://".$site."template.php?id=".$_GET['id']."' '".$file.".pdf'");
    shell_exec($payload);
    header("Location: ".$file.".pdf");
?>
