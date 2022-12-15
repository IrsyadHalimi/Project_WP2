<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?= base_url('Admin/Admin'); ?>">Sibershop</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <?= $admin['nama']; ?> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li class="divider"></li>
                    <li><a href="<?= base_url('autentifikasi/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li>
                        <a href="<?= base_url('Admin/Admin'); ?>" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?= base_url('Admin/Klien'); ?>" class="active"><i class="fa fa-smile-o fa-fw"></i> Klien</a>
                    </li>
                    <li>
                        <a href="<?= base_url('Admin/Karyawan'); ?>" class="active"><i class="fa fa-users fa-fw"></i> Karyawan</a>
                    </li>
                    <li>
                        <a href="<?= base_url('Admin/Layanan'); ?>" class="active"><i class="fa fa-scissors fa-fw"></i> Layanan</a>
                    </li>
                    <li>
                        <a href="<?= base_url('Admin/kategori'); ?>" class="active"><i class="fa fa-bars fa-fw"></i> Kategori Layanan</a>
                    </li>
                    <li>
                        <a href="<?= base_url('Admin/Karyawan/jadwalKaryawan'); ?>" class="active"><i class="fa fa-calendar fa-fw"></i> Jadwal Karyawan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>