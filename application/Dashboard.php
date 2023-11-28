<?php
    // Koneksi Database
    require_once "../config/config.php";
?>
<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Dashboard | Mbulan</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- jquery.vectormap css -->
        <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"type="text/css" />
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="dark" data-sidebar="dark">
    <!-- Begin page -->
    <div id="layout-wrapper">

        
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="dashboard.php" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm-dark.png" alt="logo-sm-dark" height="22">
                            </span>
                            <span class="logo-lg">
                                <h2 style="margin-top: 1.3rem; color: white"><img src="assets/images/logo-sm-light.png" alt="logo-sm-light" height="22"/> Mbulan</h2>
                            </span>
                        </a>

                        <a href="dashboard.php" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm-light.png" alt="logo-sm-light" height="22">
                            </span>
                            <span class="logo-lg">
                                <h2 style="margin-top: 1.3rem; color: white"><img src="assets/images/logo-sm-light.png" alt="logo-sm-light" height="22"/> Mbulan</h2>
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                        <i class="ri-menu-4-line"></i>
                    </button>

                </div>

                <div class="d-flex">
                    <div class="dropdown d-inline-block d-lg-none">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="top-icon">
                                <i class="ri-search-line"></i>
                            </div>

                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">
                            <form class="p-3">
                                <div class="m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ...">
                                        <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end -->

                    <div class="dropdown d-none d-lg-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <div class="top-icon">
                                <i class="mdi mdi-fullscreen"></i>
                            </div>
                        </button>
                    </div>
                    <!-- end  -->

                    <div class="dropdown d-inline-block user-dropdown">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/person.png"
                                alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1">Mbulan</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="../auth/Login.php"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                        </div>
                    </div>
                    <!-- end user -->

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <div class="top-icon">
                                <i class="mdi mdi-cog-outline mdi-spin"></i>
                            </div>
                        </button>
                    </div>
                    <!-- end setting -->
                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="Dashboard.php" class="waves-effect">
                                <i class="ri-dashboard-line"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <!-- end li -->
                        <li>
                            <a href="pelanggan.php" class=" waves-effect">
                                <i class="ri-group-line"></i>
                                <span>List Pelanggan<span>
                            </a>
                        </li>
                        <!-- end li -->
                        <li>
                            <a href="obat.php" class=" waves-effect">
                                <i class="ri-medicine-bottle-line"></i>
                                <span>List Obat<span>
                            </a>
                        </li>
                        <!-- end li -->
                        <li>
                            <a href="maps.php" class=" waves-effect">
                                <i class="ri-map-pin-line"></i>
                                <span>Maps</span>
                            </a>
                        </li>
                        <!-- end li -->
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-apps-2-line"></i>
                                <span>Master</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="data-pelanggan.php">Data Pelanggan</a></li>
                                <li><a href="data-obat.php">Data Obat</a></li>
                                <li><a href="data-penjualan.php">Data Penjualan</a></li>
                            </ul>
                        </li>
                        <!-- end li -->
                    </ul>
                    <!-- end ul -->
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- Start Content -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="../auth/Login.php">Login</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                    <!-- end ol -->
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        
                    </div>
                    <!-- end row -->
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-8">
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            <div class="p-4">
                                                <div class="d-flex">
                                                    <div class="flex-1">
                                                        <h3 class="mb-3"><span class="counter_value">0</span> </h3>
                                                    </div>
                                                    <div class="">
                                                        <p class="badge bg-soft-primary text-primary fw-bold font-size-20 mb-0"> <i class="ri-group-fill"></i></p>
                                                    </div>
                                                </div>
                                                <h5 class="text-muted font-size-14 mb-0">Data Pelanggan</h5>
                                            </div>
                                        </div>
                                        <!-- end cardbody -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->
                                <div class="col-xl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            <div class="p-4">
                                                <div class="d-flex">
                                                    <div class="flex-1">
                                                        <h3 class="mb-3"><span class="counter_value">0</span> </h3>
                                                    </div>
                                                    <div class="">
                                                        <p class="badge bg-soft-primary text-primary fw-bold font-size-20 mb-0"> <i class="ri-medicine-bottle-fill"></i></p>
                                                    </div>
                                                </div>
                                                <h5 class="text-muted font-size-14 mb-0">Data Obat</h5>
                                            </div>
                                        </div>
                                        <!-- end cardbody -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->
                                <div class="col-xl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            <div class="p-4">
                                                <div class="d-flex">
                                                    <div class="flex-1">
                                                        <h3 class="mb-3"><span class="counter_value">0</span> </h3>
                                                    </div>
                                                    <div class="">
                                                        <p class="badge bg-soft-primary text-primary fw-bold font-size-20 mb-0"><i class="ri-file-text-fill"></i></p>
                                                    </div>
                                                </div>
                                                <h5 class="text-muted font-size-14 mb-0">Data Penjualan</h5>
                                            </div>
                                        </div>
                                        <!-- end cardbody -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->
                            </div>
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="pelanggan.php" class="dropdown-item">Detail</a>
                                            </div>
                                        </div>
                                        <!-- end dropdown -->
                                        <h4 class="card-title mb-4">Pelanggan</h4>
                                        <div class="table-responsive">
                                            <table class="table table-centered border table-nowrap mb-0"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>Usia</th>
                                                        <th>Obat</th>
                                                        <th>Tanggal Konsultasi</th>
                                                        <th colspan="2"></th>
                                                    </tr>
                                                    <!-- end tr -->
                                                </thead>
                                                <!-- end thead -->
                                                <tbody>
                                                    <?php
                                                        $data_pelanggan = query('SELECT * FROM tbl_pelanggan');

                                                        foreach($data_pelanggan as $pelanggan){
                                                    ?>
                                                    <tr>
                                                        <td><?= $pelanggan['nama_pelanggan']?></td>
                                                        <td><?= $pelanggan['usia_pelanggan']?></td>
                                                        <td><?= $pelanggan['obat_pelanggan']?></td>
                                                        <td><?= $pelanggan['tgl_konsultasi']?></td>
                                                        <td style="width: 134px">
                                                            <div class="btn btn-primary btn-sm"><a href="pelanggan.php" style="color: white;">View more</a> 
                                                                <i class="mdi mdi-arrow-right ms-1"></i></div>
                                                        </td>
                                                    </tr>
                                                    <!-- end /tr -->
                                                    <?php } ?>
                                                <!-- end tbody -->
                                            </table>
                                            <!-- end table -->
                                        </div>
                                        <!-- end tableresponsive -->
                                    </div>
                                </div>
                            </div>
                        <!-- end row -->
                        </div>
                        <!-- end col -->
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body bg-transparent">
                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" id="dropdwon">
                                            <!-- item-->
                                            <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#tambah_aktv"> 
                                                Tambah
                                            </button>
                                        </div>
                                    </div>
                                    <!-- end dropdown -->
                                    <h4 class="card-title mb-4">Aktivitas</h4>

                                    <div class="pe-lg-3" data-simplebar style="max-height: 350px;">
                                        <ul class="list-unstyled activity-wid">

                                            <?php
                                                $data_aktivitas = query('SELECT * FROM tbl_aktv');

                                                foreach($data_aktivitas as $aktv){
                                            ?>

                                            <li class="activity-list border-left">
                                                <div class="activity-icon avatar-xs">
                                                    <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                        <i class="ri-stock-line"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <div class="d-flex">
                                                        <div class="flex-1">
                                                            <h5 class="font-size-13"><?= $aktv['tgl_aktv']?> </h5>
                                                        </div>
                                                        <div>
                                                            <small class="text-muted">
                                                                <a href="controller/aktivitas/update.php?id_aktv=<?= $aktv['id_aktv']?>" class="btn btn-sm-primary"> 
                                                                    <i class="ri-edit-2-fill"></i>
                                                                </a>
                                                                <a href="controller/aktivitas/delete.php?id_aktv=<?= $aktv['id_aktv']?>" class="btn btn-sm-primary" onclick="return confirm('Hapus Aktivitas?');"> 
                                                                    <i class="ri-eraser-fill"></i>
                                                                </a>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <p class="text-muted mb-0"><?= $aktv['ket_aktv']?></p>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- End li -->
                                            <?php } ?>
                                        </ul>
                                        <!-- end ul -->
                                    </div>
                                </div>
                                <!-- end body -->

                            <div id="tambah_aktv" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title mt-0" id="myModalLabel">Tambahkan Aktivitas</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <!-- end model-header -->

                                        <?php
                                                if( isset($_POST['submit']) ){    

                                                    if(insert_aktv($_POST) > 0){
                                                        echo "
                                                        <script>
                                                            alert('Data Berhasil Ditambah');
                                                            document.location.href = 'dashboard.php';
                                                        </script>
                                                        ";
                                                    } else {
                                                        echo "
                                                        <script>
                                                            alert('Data Gagal Ditambah');
                                                            document.location.href = 'dashboard.php';
                                                        </script>
                                                        ";
                                                    }

                                                }

                                            ?>
                                        <form action="" method="POST">
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="tgl_aktv" class="form-label">Tanggal Aktivitas</label>
                                                    <input type="date" name="tgl_aktv" class="form-control" id="tgl_aktv">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="ket_aktv" class="form-label">Keterangan</label>
                                                    <input type="text" name="ket_aktv" class="form-control" id="ket_aktv">
                                                </div>
                                            </div>
                                            <!-- end modal-body -->

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary waves-effect"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" name="submit" class="btn btn-success waves-effect waves-light">
                                                    Tambah
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end modal-content -->
                                </div>
                                <!-- end modal-dialog-->
                            </div>
                            <!-- end model -->

                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                </div>
                <!-- end container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Kelompok 2.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Crafted with <i class="mdi mdi-flower text-danger"></i> by Fanaa
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center px-3 py-4">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1">
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch"
                        data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>

            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>


    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- jquery.vectormap map -->
    <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <script src="assets/js/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    </body>

</html>