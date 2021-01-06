<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tambah Data Barang</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href=" bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href=" bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href=" bower_components/Ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href=" dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href=" dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href=" index2.html" class="logo">
                    <span class="logo-mini"><b>T</b></span>
                    <span class="logo-lg"><b>Takajukan</b></span>
                </a>
                <nav class="navbar navbar-static-top">
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="avatar1.png" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Admin</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="avatar1.png" class="img-circle" alt="User Image">
                                        <p>Admin<small>Malang, Indonesia</small></p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- Left side column -->
            <aside class="main-sidebar">
                <section class="sidebar">
                    <div class="user-panel">
                        <div class="pull-left image"><img src="avatar1.png" class="img-circle" alt="User Image"></div>
                        <div class="pull-left info">
                            <p>Admin</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">MAIN MENU</li>
                        <li>
                            <a href="beranda.php"><i class="fa fa-home"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Data Master</span>
                                <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="dataBarang.php"><i class="fa fa-circle-o"></i> Data Barang</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Jenis Barang</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-clone"></i> <span>Transaksi</span>
                                <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Barang Masuk</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Barang Keluar</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-file"></i> <span>Laporan</span>
                                <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Stok Barang</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Barang Masuk</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Barang Keluar</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
            </aside>

            <!-- Content Wrapper -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1><i class="fa fa-folder"></i> Data Barang</h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="#">Data Master</a></li>
                        <li><a href="#">Data Barang</a></li>
                        <li class="active">Tambah Data Barang</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Tambah Data Barang</h3>
                                </div>
                                <form role="form">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Nama Barang</label>
                                            <input type="text" class="form-control" name="#" placeholder="Nama Barang">
                                        </div>
                                        <div class="form-group">
                                            <label>Stok</label>
                                            <input type="number" class="form-control" name="#" placeholder="Stok Barang">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="number" class="form-control" name="#" placeholder="Harga Barang">
                                        </div>
                                    </div>

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-default"><a href="dataBarang.php">Cancel</a></button>
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
            <script src=" bower_components/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap 3.3.7 -->
            <script src=" bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- SlimScroll -->
            <script src=" bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
            <!-- FastClick -->
            <script src=" bower_components/fastclick/lib/fastclick.js"></script>
            <!-- AdminLTE App -->
            <script src=" dist/js/adminlte.min.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src=" dist/js/demo.js"></script>
            <script>
            $(document).ready(function () {
                $('.sidebar-menu').tree()
            })
            </script>
    </body>
</html>