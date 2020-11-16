<div class="main-panel"><br>
  <div class="content">
    <div class="col-md-12">
      <div class="panel animated fadeIn slower">
        <div class="card">
          <div class="card-header bg-dark">
            <h3 class="card-title text-white">
              <i class="fas fa-user-friends text-white"></i> Data Anggota
            </h3>
          </div>
          <div class="card-body">
            <button style="margin-left: 15px;" type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target=".modal-tambah-anggota"><i class="fas fa-plus"></i> Tambah Anggota</button>
            <div class="table-responsive">
              <table id="basic-datatables" class="display table table-striped table-hover">
                <thead class="bg-dark text-white">
                  <tr>
                    <th>No</th>
                    <th>Nama Anggota</th>
                    <th>Gender</th>
                    <th>No.Telpon</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Pilihan</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($anggota as $a) {
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $a->nama_anggota ?></td>
                    <td><?php echo $a->gender ?></td>
                    <td><?php echo $a->no_telp ?></td>
                    <td><?php echo $a->alamat ?></td>
                    <td><?php echo $a->email ?></td>
                    <td><?php echo $a->username ?></td>
                    <td nowrap="nowrap">
                      <a class="btn btn-success btn-xs" href="#modalEditAnggota<?php echo base_url().'admin/anggota/'.$a->id_anggota; ?>" data-toggle="modal"><i class="fas fa-edit"></i> Edit</a>
                      <a onclick="hapus()" class="btn btn-danger btn-xs" href="<?php echo base_url().'admin/hapus_anggota/'.$a->id_anggota; ?>"><i class="fas fa-trash-alt"></i> Hapus</a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

<!-- Modal Tambah Anggota -->
  <div class="modal fade modal-tambah-anggota" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-dark">
          <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff;"><b><i class="fas fa-user-friends"></i> Tambah Anggota</b></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #fff;">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/tambah_anggota_act' ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label><i class="fas fa-user text-dark"></i> Nama Anggota</label>
            <input type="text" name="nama_anggota" class="form-control" id="nama_anggota">
          </div>

          <div class="form-group">
            <label><i class="fas fa-transgender text-dark"></i> Jenis Kelamin</label>
            <select name="gender" class="form-control" id="gender">
              <option value="">--PILIH--</option>
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>

          <div class="form-group">
            <label><i class="fas fa-phone-square text-dark"></i> No.Telepon</label>
            <input type="text" name="no_telp" class="form-control" id="no_telp">
          </div>

          <div class="form-group">
            <label><i class="fas fa-sign text-dark"></i> Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat">
          </div>

          <div class="form-group">
            <label><i class="fas fa-envelope text-dark"></i> Email</label>
            <input type="text" name="email" class="form-control" id="email">
          </div>

          <div class="form-group">
            <label><i class="fas fa-user text-dark"></i> Username</label>
            <input type="text" name="username" class="form-control" id="username">
          </div>

          <div class="form-group">
            <label><i class="fas fa-key text-dark"></i> Password</label>
            <input type="password" name="password" class="form-control" id="password">
          </div>

          <div class="form-group" align="right">
            <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
            <button type="submit" class="btn btn-dark btn-sm"><i class="fa fa-save"></i> Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Tambah Anggota -->

<!-- Modal Edit Anggota -->
<?php foreach ($anggota as $a){ ?>
  <div class="modal fade" id="modalEditAnggota<?php echo base_url().'admin/anggota/'.$a->id_anggota; ?>" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-dark">
          <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff;"><b><i class="fas fa-user-friends"></i> Tambah Anggota</b></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #fff;">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/update_anggota' ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label><i class="fas fa-user text-dark"></i> Nama Anggota</label>
            <input type="hidden" name="id" value="<?php echo $a->id_anggota; ?>">
            <input type="text" name="nama_anggota" class="form-control" value="<?php echo $a->nama_anggota; ?>">
            <?php echo form_error('nama_anggota'); ?>
          </div>

          <div class="form-group">
            <label><i class="fas fa-transgender text-dark"></i> Gender</label>
            <select name="gender" class="form-control">
              <option <?php if($a->gender == "Laki-Laki"){echo "selected='selected'";} echo $a->gender; ?> value="Laki-Laki">Laki-Laki</option>
              <option <?php if($a->gender == "Perempuan"){echo "selected='selected'";} echo $a->gender; ?> value="Perempuan">Perempuan</option>
            </select>
            <?php echo form_error('gender'); ?>
          </div>

          <div class="form-group">
            <label><i class="fas fa-phone-square text-dark"></i> No.Telpon</label>
            <input type="text" name="no_telp" class="form-control" value="<?php echo $a->no_telp; ?>">
            <?php echo form_error('no_telp'); ?>
          </div>

          <div class="form-group">
            <label><i class="fas fa-sign text-dark"></i> Alamat</label>
            <input type="text" name="alamat" class="form-control" value="<?php echo $a->alamat; ?>">
            <?php echo form_error('alamat'); ?>
          </div>

          <div class="form-group">
            <label><i class="fas fa-envelope text-dark"></i> Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $a->email; ?>">
            <?php echo form_error('email'); ?>
          </div>

          
          <div class="form-group">
            <label><i class="fas fa-user text-dark"></i> Username</label>
            <input type="text" name="username" class="form-control" value="<?php echo $a->username; ?>">
            <?php echo form_error('username'); ?>
          </div>

          <div class="form-group">
            <label><i class="fas fa-key text-dark"></i> Password</label>
            <input type="password" name="password" class="form-control" value="<?php echo $a->password; ?>">
            <?php echo form_error('password'); ?>
          </div>

          <div class="form-group" align="right">
            <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
            <button type="submit" class="btn btn-dark btn-sm"><i class="fas fa-save"></i> Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<!-- Modal Edit Anggota -->

<!--Bagian Footer -->
</div>
  </div>
    <footer class="footer">
      <div class="container-fluid">
        <div class="copyright ml-left">
          Copyright © 2020, made with <i class="fa fa-heart heart text-danger"></i> by <a href="#">SMP 1</a>
        </div>        
      </div>
    </footer>
  </div>
</div>
<!-- Bagian Footer -->