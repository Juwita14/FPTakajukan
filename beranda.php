<?php require "checker.php"; ?>

<?php 
    require "koneksi.php";
    $queries = [
        "SELECT COUNT(*) FROM barang",
        "SELECT COUNT(*) FROM transaksi WHERE jumlah_transaksi > 0",
        "SELECT COUNT(*) FROM transaksi WHERE jumlah_transaksi < 0",
        "SELECT COUNT(*) FROM user",
    ];

    $datas = [];
    foreach($queries as $q){
        $r = mysqli_query($db_connection, $q);
        $datas[] = mysqli_fetch_array($r, MYSQLI_NUM)[0];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Takajukan</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <?php require "component/header.php" ?>

            <!-- Left side column -->
            <?php require "component/sidebar.php"; ?>
            <!-- Content Wrapper -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1><i class="fa fa-home"></i> Home</h1>
                    <ol class="breadcrumb">
                        <li><a href="/beranda.php"><i class="fa fa-home"></i>Dashboard</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-4 col-xs-12">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3><?= $datas[0] ?></h3>
                                <p>Data Barang</p>
                            </div>
                            <div class="icon">
                                <i class="ion-android-folder"></i>
                            </div>
                                <a href="/barang/data.php" class="small-box-footer"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-xs-12">
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3><?= $datas[1] ?></h3>
                                    <p>Data Masuk</p>
                                </div>
                                <div class="icon">
                                    <i class="ion-arrow-left-a"></i>
                                </div>

                                <a href="/transaksi/index.php" class="small-box-footer"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-12">
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3><?= $datas[2] ?></h3>
                                    <p>Barang Keluar</p>
                                </div>
                                <div class="icon">
                                    <i class="ion-arrow-right-a"></i>
                                </div>
                                    <a href="/transaksi/index.php" class="small-box-footer"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <footer class="main-footer">
                <strong>Copyright &copy; 2020 <a href="#">www.takajukan.com</a>.
            </footer>
            <!-- ./wrapper -->

            <!-- jQuery 3 -->
            <script src=" assets/bower_components/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap 3.3.7 -->
            <script src=" assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- SlimScroll -->
            <script src=" assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
            <!-- FastClick -->
            <script src=" assets/bower_components/fastclick/lib/fastclick.js"></script>
            <!-- AdminLTE App -->
            <script src=" assets/dist/js/adminlte.min.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src=" assets/dist/js/demo.js"></script>
            <script>
            $(document).ready(function () {
                $('.sidebar-menu').tree()
            })
            </script>
    </body>
</html>
