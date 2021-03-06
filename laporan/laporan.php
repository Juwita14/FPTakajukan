<?php
    require "../checker.php";
    require "../koneksi.php";

    if(!isset($_GET['id'])) header('Location: /laporan/index.php');
    $_GET['id'] = mysqli_real_escape_string($db_connection, $_GET['id']);

    $trx = mysqli_fetch_all(mysqli_query($db_connection, "SELECT * FROM transaksi WHERE id_barang = ".$_GET['id']), MYSQLI_ASSOC);
    $brg = mysqli_fetch_all(mysqli_query($db_connection, "SELECT * FROM barang WHERE id_barang = ".$_GET['id']), MYSQLI_ASSOC);
    $arr = [];
    $stok = $brg[0]['stok_barang'];
    $trx_rev = array_reverse($trx);
    array_push($arr, [$stok, 1]);
    foreach ($trx_rev as $t) {
        $stok = $stok - $t['jumlah_transaksi'];
        array_push($arr, [$stok, $t['waktu_transaksi']]);
    }
    $arr = array_reverse($arr);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Data Laporan</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/bower_components/Ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="../assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            
            <?php require "../component/header.php"; ?>

            <!-- Left side column -->
            <?php require "../component/sidebar.php"; ?>

            <!-- Content Wrapper -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1><i class="fa fa-folder"></i> Laporan</h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="active">Laporan</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="box">
                            <div class="box-header">
                                    <h3 class="box-title">Barang</h3>
                                </div>
                                <div class="box-body">
                                    <div class="col-md-12 row">
                                        <div class="col-md-4">Nama Barang</div>
                                        <div class="col-md-8"><b><?= $brg[0]['nama_barang'] ?></b></div>
                                        <div class="col-md-4">Harga Barang</div>
                                        <div class="col-md-8"><b><?= rupiah($brg[0]['harga_barang']) ?></b></div>
                                        <div class="col-md-4">Stok Barang</div>
                                        <div class="col-md-8"><b><?= $brg[0]['stok_barang'] ?> buah</b></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Laporan</h3>
                                    <div class="pull-right">
                                    </div>
                                </div>
                                <div class="box-body">
                                    <table id="example2" class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Banyak Laporan</th>
                                                <th>Jenis Laporan</th>
                                                <th>Waktu Laporan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $sql = "SELECT * FROM barang";
                                                $query = mysqli_query($db_connection, $sql);
                                                $i = 1;
                                                foreach ($trx as $t):
                                            ?>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td><?= abs($t['jumlah_transaksi']) ?> buah</td>
                                                <td><?= ($t['jumlah_transaksi'] > 0) ? "<div class='label label-success'>Barang Masuk</div>" : "<div class='label label-danger'>Barang Keluar</div>" ?></td>
                                                <td><?= $t['waktu_transaksi'] ?></td>
                                            </tr>
                                            <?php $i++; endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Grafik</h3>
                                </div>
                                <div class="box-body" style="min-height: 500px">
                                    <div id="chart"></div>
                                </div>
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
            <script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap 3.3.7 -->
            <script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- SlimScroll -->
            <script src="../assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
            <!-- FastClick -->
            <script src="../assets/bower_components/fastclick/lib/fastclick.js"></script>
            <!-- AdminLTE App -->
            <script src="../assets/dist/js/adminlte.min.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="../assets/dist/js/demo.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/canvasjs.min.js" integrity="sha512-FJ2OYvUIXUqCcPf1stu+oTBlhn54W0UisZB/TNrZaVMHHhYvLBV9jMbvJYtvDe5x/WVaoXZ6KB+Uqe5hT2vlyA==" crossorigin="anonymous"></script>
            <script>
            $(document).ready(function () {
                $('.sidebar-menu').tree()
            });
            window.onload = function (){
                var chart = new CanvasJS.Chart("chart", {
                    data: [{
                        type: "line",
                        dataPoints: [
                            <?php foreach ($arr as $idx=>$a) {
                                echo "{y: $a[0]},";
                            } ?>
                        ],
                        showInLegend: true, 
                        legendText: "Barang"
                    }]
                });
                
                chart.render();
            }
            </script>
    </body>
</html>