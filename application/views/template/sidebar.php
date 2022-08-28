<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('assets') ?>/index3.html" class="brand-link">
        <img src="<?= base_url('assets') ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SI Dadu</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('assets') ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $sidebar_nama ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- <li class="nav-header">DATA MASTER</li> -->
                <li class="nav-item">
                    <a href="<?= base_url('dashboard') ?>" class="nav-link<?= $page == 'Dashboard' ? ' active' : '' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('pelatihan/laporan') ?>" class="nav-link<?= $page == 'Laporan Pelatihan' ? ' active' : '' ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Laporan Pelatihan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('peserta') ?>" class="nav-link<?= $page == 'Peserta' ? ' active' : '' ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Peserta
                        </p>
                    </a>
                </li>
                <li class="nav-header">DATA MASTER</li>

                <li class="nav-item">
                    <a href="<?= base_url('satuankerja') ?>" class="nav-link<?= $page == 'Satuan Kerja' ? ' active' : '' ?>">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Satuan Kerja
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('kejuruan') ?>" class="nav-link<?= $page == 'Kejuruan' ? ' active' : '' ?>">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Kejuruan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('pelatihan') ?>" class="nav-link<?= $page == 'Jenis Pelatihan' ? ' active' : '' ?>">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Jenis Pelatihan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('user') ?>" class="nav-link<?= $page == 'User' ? ' active' : '' ?>">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            User
                        </p>
                    </a>
                </li>
                <li class="nav-header">AUTH</li>
                <li class="nav-item">
                    <a href="<?= base_url('auth/logout') ?>" class="nav-link">
                        <i class="nav-icon far fas fa-sign-out-alt "></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $page ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                        <?php if ($page != 'Dashboard') : ?>
                            <li class="breadcrumb-item<?= $sub_page ? '' : ' active' ?>"><?= $page ?></li>
                        <?php endif ?>
                        <li class="<?= $sub_page ? 'breadcrumb-item active' : '' ?>"><?= $sub_page ?? '' ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">