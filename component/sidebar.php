<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel pb-5">
            <div class="pull-left info">
                <p><?= $_SESSION['username'] ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN MENU</li>
            <li>
                <a href="/beranda.php"><i class="fa fa-home"></i> <span>Dashboard</span></a>
            </li>
            <li>
                <a href="/barang/data.php"><i class="fa fa-folder"></i> Data Barang</a>
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