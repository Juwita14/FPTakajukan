<?php
    require "../checker.php";
    require "../koneksi.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tambah Data Transaksi</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
                    <li><a href="#">Data Transaksi</a></li>
                    <li class="active">Tambah Data Transaksi</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Tambah Data Transaksi</h3>
                            </div>
                            <form role="form" action="proses.php" enctype="multipart/form-data" method="POST">
                                <div class="box-body">
                                <div class="form-group">
                                        <label>Barang Transaksi</label>
                                        <select name="id_barang" class="form-control">
                                            <?php
                                                $q = mysqli_query($db_connection, "SELECT * FROM barang");
                                                while($r = mysqli_fetch_array($q, MYSQLI_ASSOC)):
                                            ?>
                                            <option value="<?= $r['id_barang'] ?>"><?= $r['nama_barang'] ?></option>
                                            <?php endwhile; ?>
                                            
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah Transaksi</label>
                                        <input type="number" class="form-control" name="jumlah_transaksi" placeholder="Jumlah Transaksi">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Transaksi</label>
                                        <select name="jenis_transaksi" class="form-control">
                                            <option value="1">Barang Masuk</option>
                                            <option value="0">Barang Keluar</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-default"><a
                                            href="index.php">Cancel</a></button>
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                </div>
                            </form>
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

            function addGambar(idx){
                idx++;
                idx = $('.gambar').length + 1;
                $("#gambar-container").append('<div id="gambar-'+idx+'" class="row gambar"><div class="gambar-form col-lg-9"><div class="form-group"><input class="form-control" name="gambar[]" type="file"/></div></div><div class="gambar-btns col-lg-3"><button type="button" onclick="removeGambar(' + idx + ')" class="btn btn-danger remove-'+idx+'"><b>-</b></button> <button type="button" onclick="addGambar('+idx+')" class="btn btn-primary add-'+idx+'"><b>+</b></button></div></div>');
            }

            function removeGambar(idx){
                if($('.gambar').length > 1){
                    if($('.gambar').length == 2){
                        $(".remove-1").remove();
                    }
                    $("#gambar-" + idx--).remove();
                }
            }
        </script>
</body>

</html>