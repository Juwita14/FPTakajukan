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
            <header class="main-header">
                <!-- Logo -->
                <a href="index.html" class="logo">
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
                                <li><a href="dataBarang.php"><i class="fa fa-circle-o"></i> Data Barang</a></li>
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
                    <h1><i class="fa fa-home"></i> Home</h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-home"></i>Dashboard</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>7</h3>
                                <p>Data Barang</p>
                            </div>
                            <div class="icon">
                                <i class="ion-android-folder"></i>
                            </div>
                                <a href="#" class="small-box-footer"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>5</h3>
                                    <p>Data Masuk</p>
                                </div>
                                <div class="icon">
                                    <i class="ion-arrow-left-a"></i>
                                </div>

                                <a href="#" class="small-box-footer"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>3</h3>
                                    <p>Barang Keluar</p>
                                </div>
                                <div class="icon">
                                    <i class="ion-arrow-right-a"></i>
                                </div>
                                    <a href="#" class="small-box-footer"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>2</h3>
                                    <p>User</p>
                                </div>
                                <div class="icon">
                                    <i class="ion-android-person"></i>
                                </div>
                                    <a href="#" class="small-box-footer"><i class="fa fa-plus"></i></a>
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
