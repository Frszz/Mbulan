<?php
    // Koneksi Database
    require_once "../../../config/config.php";
?>
<!doctype html>
<html lang="en">

  <head>

      <meta charset="utf-8" />
      <title> List Obat | Mbulan</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
      <meta content="Themesdesign" name="author" />
      <!-- App favicon -->
      <link rel="shortcut icon" href="../../assets/images/favicon.ico">

      <!-- Bootstrap Css -->
      <link href="../../assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
      <!-- Icons Css -->
      <link href="../../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
      <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
      <!-- App Css-->
      <link href="../../assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

  </head>

  <body data-topbar="dark" data-sidebar="dark"> 

      <!-- <body data-layout="horizontal" data-topbar="dark"> -->

  <!-- Begin page -->
  <div id="layout-wrapper">

      
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="dashboard.php" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="../../assets/images/logo-sm-dark.png" alt="logo-sm-dark" height="22">
                            </span>
                            <span class="logo-lg">
                                <h2 style="margin-top: 1.3rem; color: white"><img src="../../assets/images/logo-sm-light.png" alt="logo-sm-light" height="22"/> Mbulan</h2>
                            </span>
                        </a>

                        <a href="dashboard.php" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="../../assets/images/logo-sm-light.png" alt="logo-sm-light" height="22">
                            </span>
                            <span class="logo-lg">
                                <h2 style="margin-top: 1.3rem; color: white"><img src="../../assets/images/logo-sm-light.png" alt="logo-sm-light" height="22"/> Mbulan</h2>
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
                            <img class="rounded-circle header-profile-user" src="../../assets/images/users/person.png"
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

      <!--  Left Sidebar Start  -->
        <div class="vertical-menu">

        <div data-simplebar class="h-100">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title">Menu</li>

                    <li>
                        <a href="../../Dashboard.php" class="waves-effect">
                            <i class="ri-dashboard-line"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <!-- end li -->
                    <li>
                        <a href="../../pelanggan.php" class=" waves-effect">
                            <i class="ri-group-line"></i>
                            <span>List Pelanggan<span>
                        </a>
                    </li>
                    <!-- end li -->
                    <li>
                        <a href="../../obat.php" class=" waves-effect">
                            <i class="ri-medicine-bottle-line"></i>
                            <span>List Obat<span>
                        </a>
                    </li>
                    <!-- end li -->
                    <li>
                        <a href="../../maps.php" class=" waves-effect">
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
                            <li><a href="../../data-pelanggan.php">Data Pelanggan</a></li>
                            <li><a href="../../data-obat.php">Data Obat</a></li>
                            <li><a href="../../data-penjualan.php">Data Penjualan</a></li>
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
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Edit Data Obat</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="../../Dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="../../obat.php">List Obat</a></li>
                                        <li class="breadcrumb-item active">Edit Data</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <?php

                                    $id_obat = $_GET['id_obat'];

                                    $obat = query("SELECT * FROM tbl_obat WHERE id_obat = $id_obat")[0];

                                    if( isset($_POST['simpan']) ){    

                                        if(update_obat($_POST) > 0){
                                            echo "
                                            <script>
                                                alert('Data Berhasil Diubah');
                                                document.location.href = '../../obat.php';
                                            </script>
                                            ";
                                        } else {
                                            echo "
                                            <script>
                                                alert('Data Gagal Diubah');
                                                document.location.href = '../../obat.php';
                                            </script>
                                            ";
                                        }

                                    }

                                    ?>

                                <form action="" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id_obat" value="<?= $obat['id_obat']?>">
                                    <input type="hidden" name="foto_ex" value="<?= $obat['id_obat']?>">
                                    <div class="card-body">

                                        <div class="row mb-3">
                                            <label for="foto_obat" class="col-sm-2 col-form-label">Foto Obat </label>
                                            <div class="col-sm-10">
                                                <img src="../../assets/images/obat/<?=$obat['foto_obat']?>"  width="150" alt="Foto" style="margin-bottom: 20px; border-radius: 5px;">
                                                <input class="form-control" name="foto_obat" type="file" id="foto_obat">
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row mb-3">
                                            <label for="nama_obat" class="col-sm-2 col-form-label">Nama Obat</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="nama_obat" type="text" id="nama_obat" value="<?= $obat['nama_obat']?>">
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row mb-3">
                                            <label for="kode_obat" class="col-sm-2 col-form-label">Kode Obat</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="kode_obat" type="text" id="kode_obat" value="<?= $obat['kode_obat']?>">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        
                                        <div class="row mb-3">
                                            <label for="harga_obat" class="col-sm-2 col-form-label">Harga Obat</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="harga_obat" type="text" id="harga_obat" value="<?= $obat['harga_obat']?>">
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row mb-3">
                                            <label for="tgl_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="tgl_masuk" type="date" id="tgl_masuk" value="<?= $obat['tgl_masuk']?>">
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row mb-3">
                                            <label for="persediaan" class="col-sm-2 col-form-label">Persediaaan</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="persediaan" type="number" id="persediaan" value="<?= $obat['persediaan']?>">
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row mb-3">
                                            <label for="tgl_kadaluwarsa" class="col-sm-2 col-form-label">Tanggal Kaluwarsa</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="tgl_kadaluwarsa" type="date" id="tgl_kadaluwarsa" value="<?= $obat['tgl_kadaluwarsa']?>">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        
                                        <div class="mb-3 row mt-5">
                                            <div class="col">
                                                <input type="submit" class="btn btn-success" value="Simpan" name="simpan">
                                                <a href="../../obat.php" type="button" class="btn btn-danger"> Kembali</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- end cardbody -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- end row -->

            </div>
            <!-- end row -->
        </div>
      <!-- container-fluid -->
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
                <img src="../../assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1">
            </div>

            <div class="form-check form-switch mb-3">
                <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                <label class="form-check-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="../../assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2">
            </div>
            <div class="form-check form-switch mb-3">
                <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch"
                    data-bsStyle="http://localhost/Mbulan/application/assets/css/bootstrap-dark.min.css" data-appStyle="http://localhost/Mbulan/application/assets/css/app-dark.min.css">
                <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
            </div>

        </div>

    </div> <!-- end slimscroll-menu-->
    </div>
  <!-- /Right-bar -->

  <!-- Right bar overlay-->
  <div class="rightbar-overlay"></div>

  <!-- JAVASCRIPT -->
  <script src="../../assets/libs/jquery/jquery.min.js"></script>
  <script src="../../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/libs/metismenu/metisMenu.min.js"></script>
  <script src="../../assets/libs/simplebar/simplebar.min.js"></script>
  <script src="../../assets/libs/node-waves/waves.min.js"></script>

  <!-- bs custom file input plugin -->
  <script src="../../assets/libs/bs-custom-file-input/bs-custom-file-input.min.js"></script>

  <script src="../../assets/js/pages/form-element.init.js"></script>

  <script src="../../assets/js/app.js"></script>

  </body>

</html>