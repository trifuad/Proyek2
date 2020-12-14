<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Aplikasi E-Library</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
  <link rel="icon" href="<?php echo base_url().'assets_v2/img/favicon/books-icon-red.png'?>" type="image/x-icon"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets_v2/css/bootstrap.min.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets_v2/css/atlantis.min.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets_v2/css/fonts.min.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets_v2/css/animate.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets_v2/sweetalert2/sweetalert2.min.css' ?>">
</head>
<body data-background-color="bg1" onload="myFunction()">
  <div class="wrapper">
    <div class="main-header">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark">
        <a href="<?php echo base_url().'admin'; ?>" class="logo">
          <img width="170" src="<?php echo base_url().'assets_v2/img/website-logo/logosmp.png' ?>">
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <i class="icon-menu"></i>
          </span>
        </button>
        <button class="topbar-toggler more"><i class="icon-arrow-down"></i></button>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="icon-menu"></i>
          </button>
        </div>
      </div>
  
<!-- Navbar Header -->
  <nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">   
    <div class="container-fluid">
      <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
        <li class="nav-item dropdown hidden-caret">
          <a style="margin-top: 3px; color: #fff; text-decoration: none;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" ariaexpanded="false"><?php echo "Halo, <b>".$this->session->userdata('nama');?></b> <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-user animated fadeIn fast">
            <div class="dropdown-user-scroll scrollbar-outer">
              <li>
                <a class="dropdown-item" href="<?php echo base_url().'admin/ganti_password_admin' ?>"><i class="fas fa-key"></i> Ganti Password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo base_url().'admin/logout'?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
              </li>
            </div>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
<!-- End Navbar -->
</div><!-- di bawah nav --> 

   

<!-- Sidebar -->
  <div class="sidebar sidebar-style-2">     
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
      <div class="sidebar-content">
        <ul class="nav nav-primary">
          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Navigation</h4>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url().'admin'; ?>">
              <i class="fa fa-desktop text-dark"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url().'admin/profil'; ?>">
              <i class="fa fa-school text-dark"></i>
              <p>Profil Sekolah</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url().'admin/buku'; ?>">
              <i class="fa fa-book-open text-dark"></i>
              <p>Data Buku</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url().'admin/anggota'; ?>">
              <i class="fas fa-user-friends text-dark"></i>
              <p>Data Anggota</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url().'admin/peminjaman'; ?>">
              <i class="fas fa-retweet text-dark"></i>
              <p>Peminjaman Buku</p>
            </a>
          </li>

          <li class="nav-item">
            <a data-toggle="collapse" href="#print">
              <i class="fas fa-print text-dark"></i>
              <p>Cetak Laporan</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="print">
              <ul class="nav nav-collapse">
                <li>
                  <a href="<?php echo base_url().'admin/cetak_laporan_buku'; ?>"> 
                    <p>Laporan Data Buku</p>
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url().'admin/cetak_laporan_anggota'; ?>"> 
                    <p>Laporan Data Anggota</p>
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url().'admin/cetak_laporan_peminjaman' ?>"> 
                    <p>Laporan Data Peminjaman</p>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div> 
<!-- End Sidebar --> 
<script>
WebFont.load({
  google: {"families":["Lato:300,400,700,900"]},
  custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets_v2/css/fonts.min.css']},
  active: function() {
    sessionStorage.fonts = true;
  }
});
</script>
<!-- JQuery -->
<script type="text/javascript" src="<?php echo base_url().'assets_v2/js/core/jquery.3.2.1.min.js'?>"></script>
<!-- Moment JS -->
<script type="text/javascript" src="<?php echo base_url().'assets_v2/bootstrap-datepicker/moment/moment.js'?>"></script>
<!-- Bootstrap JS -->
<script type="text/javascript" src="<?php echo base_url().'assets_v2/js/core/bootstrap.min.js'?>"></script>
<!-- Popper -->
<script type="text/javascript" src="<?php echo base_url().'assets_v2/js/core/popper.min.js'?>"></script>
<!-- DataTables -->
<script type="text/javascript" src="<?php echo base_url().'assets_v2/js/plugin/datatables/datatables.min.js'?>"></script>
<!-- Web Font -->
<script type="text/javascript" src="<?php echo base_url().'assets_v2/js/plugin/webfont/webfont.min.js'?>"></script>
<!-- Atlantis JS -->
<script type="text/javascript" src="<?php echo base_url().'assets_v2/js/atlantis.min.js'?>"></script>
<!-- Scrollbar -->
<script type="text/javascript" src="<?php echo base_url().'assets_v2/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js'?>"></script>
<!-- Jquery UI -->
<script type="text/javascript" src="<?php echo base_url().'assets_v2/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js'?>"></script>
<!-- Jquery UI Touch -->
<script type="text/javascript" src="<?php echo base_url().'assets_v2/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js'?>"></script>
<!-- Sweet Alert -->
<script type="text/javascript" src="<?php echo base_url().'assets_v2/sweetalert2/sweetalert2.all.min.js' ?>"></script>
