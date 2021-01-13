<?php 
    session_start(); 
    if(!isset($_SESSION['username'])){
        header('Location: /login.php?err=1');
    }

    function rupiah($int){
        $hasil_rupiah = "Rp " . number_format($int,2,',','.');
        return $hasil_rupiah;
    }
?>