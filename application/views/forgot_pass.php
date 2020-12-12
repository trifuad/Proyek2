<div class="main-panel">
  <div class="content">
    <div class="col-md-12">
      <div class="panel animated fadeIn slower">
        <div class="card"><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?php echo $login_title ?></title>
  <link rel="icon" href="<?php echo base_url().'assets_v2/img/favicon/smp-icon.png'?>" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo base_url().'libs/css/bootstrap.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'libs/css/fontawesome.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'libs/style.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'libs/components.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets_v2/css/fonts.min.css' ?>">
</head>

<body class="bg-dark">
  <div id="app">
    <section class="section">
      <div class="container mt-5">

      <div class="card card-dark">
        <div class="row">
        <div class="col-lg-2 col-sm-4">
            <form action="<?php echo base_url().'welcome/login' ?>">
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-dark" tabindex="4">
                        <<< Login
                    </button>
                </div>
            </form>
        </div>
        </div>

        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">       
          <?php
            if(isset($_GET['pesan'])){
              if($_GET['pesan']=="berhasil"){
                echo "<div class='alert alert-success'>Password Berhasil diganti.</div>";
              }
            }
            ?>
            <div class="login-brand">
              <img src="<?php echo base_url().'assets_v2/img/website-logo/logosmp.png'?>" alt="logo" width="300">
            </div>

            <div class="card card-dark">
                <div class="card-header"><br>
                    <div class="card-title"><i class="fas fa-key text-danger"></i> Ganti Password</div>
                </div>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url().'welcome/forgot_pass_act' ?>">
                  <div class="form-group">
                      <label><i class="fas fa-user"></i> Username</label>
                      <input type="text" class="form-control" name="username" autocomplete="off" placeholder="Masukan Username" autofocus>
                      <?php echo form_error('username'); ?>
                  </div>

                  <div class="form-group">
                    <label><i class="fas fa-fingerprint"></i> Ganti Password</label>
                      <input type="password" class="form-control" name="pass_baru" autocomplete="off" placeholder="Masukan Password" autofocus>
                      <?php echo form_error('pass_baru'); ?>
                  </div>

                  <div class="form-group">
                    <label><i class="fas fa-fingerprint"></i> Ulangi Password</label>
                      <input type="password" class="form-control" name="ulang_pass" autocomplete="off" placeholder="Masukan Password" autofocus>
                      <?php echo form_error('ulang_pass'); ?>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-dark btn-block" tabindex="4">
                      OK
                    </button>
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>

  <script src="<?php echo base_url().'libs/js/jquery.min.js'?>"></script>
  <script src="<?php echo base_url().'libs/js/popper.js'?>"></script>
  <script src="<?php echo base_url().'libs/js/tooltip.js'?>"></script>
  <script src="<?php echo base_url().'libs/js/bootstrap.min.js'?>"></script>
  <script src="<?php echo base_url().'libs/js/jquery.nicescroll.min.js'?>"></script>
  <script src="<?php echo base_url().'libs/js/moment.min.js'?>"></script>
  <script src="<?php echo base_url().'libs/js/stisla.js'?>"></script>
  <script src="<?php echo base_url().'libs/js/scripts.js'?>"></script>
  <script src="<?php echo base_url().'libs/js/custom.js'?>"></script>
  <script src="<?php echo base_url().'assets_v2/js/plugin/webfont/webfont.min.js'?>"></script>
  <script>
    WebFont.load({
      google: {"families":["Lato:300,400,700,900"]},
      custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets_v2/css/fonts.min.css']},
      active: function() {
        sessionStorage.fonts = true;
      }
    });
</script>
</body>
</html>