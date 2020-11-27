<div class="main-panel">
  <div class="content">
    <div class="col-md-12">
      <div class="panel animated fadeIn slower">
        <div class="card">
        <div class="card-header"><br>
          <div class="card-title"><i class="fas fa-key text-danger"></i> Ganti Password</div>
        </div>

      <div class="card-body">
        <button style="margin-left: 15px;" type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target=".modal-admin">Admin</button>
        <button style="margin-left: 15px;" type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target=".modal-anggota">Anggota</button>
      </div>

      <!-- modal admin -->
      <div class="modal fade modal-admin" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header bg-dark">
              <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff;"><b><i class="fas fa-user-friends"></i> Ganti Password Admin</b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #fff;">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
        <div class="modal-body">
          <div class="col-md-12 col-md-offset-3">
            <?php
            if(isset($_GET['pesan'])){
              if($_GET['pesan']=="berhasil"){
                echo "<div class='alert alert-success'>Password Berhasil diganti.</div>";
              }
            }
            ?>
            <form action="<?php echo base_url().'admin/ganti_password_act' ?>" method="post">
              <div class="form-group">
                <label>Password Baru</label>
                <input type="password" class="form-control" name="pass_baru">
                <?php echo form_error('pass_baru'); ?>
              </div>

              <div class="form-group">
                <label>Ulangi Password Baru</label>
                <input type="password" class="form-control" name="ulang_pass">
                <?php echo form_error('ulang_pass'); ?>
              </div>

              <div class="form-group">
                <input class="btn btn-danger btn-sm" type="submit" value="Simpan">
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- modal anggota -->
      <div class="modal fade modal-anggota" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header bg-dark">
              <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff;"><b><i class="fas fa-user-friends"></i> Ganti Password Anggota</b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #fff;">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
        <div class="modal-body">
          <div class="col-md-12 col-md-offset-3">
            <?php
            if(isset($_GET['pesan'])){
              if($_GET['pesan']=="berhasil"){
                echo "<div class='alert alert-success'>Password Berhasil diganti.</div>";
              }
            }
            ?>
            <form action="<?php echo base_url().'admin/ganti_password_act' ?>" method="post">
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username">
                <?php echo form_error('pass_baru'); ?>
              </div>

              <div class="form-group">
                <label>Password Baru</label>
                <input type="password" class="form-control" name="pass_baru">
                <?php echo form_error('pass_baru'); ?>
              </div>

              <div class="form-group">
                <label>Ulangi Password Baru</label>
                <input type="password" class="form-control" name="ulang_pass">
                <?php echo form_error('ulang_pass'); ?>
              </div>

              <div class="form-group">
                <input class="btn btn-danger btn-sm" type="submit" value="Simpan">
              </div>
            </form>
          </div>
        </div>
      </div>

      </div>
    </div>
  </div>
</div>