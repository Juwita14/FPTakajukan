<?php
    require "../checker.php";
    require "../koneksi.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Data Transaksi</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/bower_components/Ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="../assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
                    <h1><i class="fa fa-folder"></i> Data Transaksi</h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="active">Data Transaksi</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Transaksi</h3>
                                    <div class="pull-right">
                                        <a href="/transaksi/tambah.php" class="btn btn-sm btn-primary">
                                            <i class="fa fa-plus"></i> Tambah Transaksi
                                        </a>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <table id="example2" class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th width="240">Barang</th>
                                                <th>Jenis Transaksi</th>
                                                <th>Banyak Transaksi</th>
                                                <th>Waktu Transaksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $sql = "SELECT * FROM transaksi INNER JOIN barang ON barang.id_barang = transaksi.id_barang ORDER BY transaksi.waktu_transaksi";
                                                $query = mysqli_query($db_connection, $sql);
                                                while ($trx = mysqli_fetch_array($query)):
                                            ?>
                                            <tr>
                                                <td><?= $trx['id_transaksi'] ?></td>
                                                <td><?= $trx['nama_barang'] ?></td>
                                                <td><?= ($trx['jumlah_transaksi'] > 0) ? "<div class='label label-success'>Barang Masuk</div>" : "<div class='label label-danger'>Barang Keluar</div>" ?></td>
                                                <td><?= $trx['jumlah_transaksi'] ?></td>
                                                <td><?= $trx['waktu_transaksi'] ?></td>
                                            </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
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
            <script>
            $(document).ready(function () {
                $('.sidebar-menu').tree()
            })
            </script>
    </body>
</html>