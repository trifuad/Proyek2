<div class="main-panel"><br>
  <div class="content">
    <div class="col-xl-12">
      <div class="panel animated fadeIn slower">
        <div class="card">
          <div class="card-header bg-dark">
            <div class="card-title text-white"><i class="fas fa-book-open text-white"></i> Data Informasi Sekolah</div>
          </div>
          <div class="card-body">
            <button style="margin-left: 15px;" type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target=".modal-tambah-profil"><i class="fas fa-plus"></i> Tambah Informasi</button>
              <div class="table-responsive">
                <table id="basic-datatables" class="display table table-striped table-hover">
                  <thead class="bg-dark text-white">
                    <tr>
                      <th>No</th>
                      <th>Cover Profil</th>
                      <th>Kategori Profil</th>
                      <th>Judul Profil</th>
                      <th>Isi 1</th>
                      <th>Isi 2</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($profil as $p) {
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><img src="<?php echo base_url().'/assets/upload/'.$b->gambar; ?>" width="80" height="100" alt="gambar tidak ada"></td>
                      <td><?php echo $b->judul_profil ?></td>
                      <td><?php echo $b->kategoriprofil ?></td>
                      <td><?php echo $b->isi_satu ?></td>
                      <td><?php echo $b->isi_dua ?></td>
                      <td nowrap="nowrap">
                        <a class="btn btn-success btn-xs" href="<?php echo base_url().'admin/edit_profil/'.$b->id_profil; ?>"><i class="fas fa-edit"></i> Edit</a>
                        <a class="btn btn-danger btn-xs" href="<?php echo base_url().'admin/hapus_profil/'.$b->id_profil; ?>"><i class="fas fa-trash-alt"></i> Hapus</a>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

  <!-- Modal Tambah Profil -->
    <div class="modal fade modal-tambah-profil" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-dark">
            <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff;"><i class="fas fa-book-open"> </i><b> Tambah Informasi Sekolah</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #fff;">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md">
                <form action="<?php echo base_url().'admin/tambah_profil_act' ?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label><i class="fas fa-list text-dark"></i> Kategori Profil</label>
                    <select name="id_kategoriprofil" class="form-control">
                      <option value="">--Pilih Kategori--</option>
                      <?php foreach ($kategoriprofil as $k) { ?>
                        <option value="<?php echo $k->id_kategoriprofil; ?>"><?php echo $k->nama_kategoriprofil; ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label><i class="fas fa-book text-dark"></i> Judul Profil</label>
                    <input type="text" name="judul_profil" class="form-control" placeholder="Judul Profil" autocomplete="off">
                    <?php echo form_error('judul_profil'); ?>
                  </div>

                  <div class="form-group">
                    <label><i class="fas fa-user text-dark"></i> Isi Satu</label>
                    <input type="text" name="isi_satu" class="form-control" placeholder="Isi Satu" autocomplete="off">
                  </div>

                  <div class="form-group">
                    <label><i class="fas fa-building text-dark"></i> Isi Dua</label>
                    <input type="text" name="isi_dua" class="form-control" placeholder="Isi Dua" autocomplete="off">
                  </div>

                <div class="form-group">
                  <label><i class="fas fa-image text-dark"></i> Gambar</label>
                  <input type="file" name="foto" class="form-control">
                </div>
                
                <!-- Perlu Edit Posisi Modal Footer -->
                <div class="modal-footer"> 
                  <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                  <input type="submit" value="Simpan" class="btn btn-primary btn-sm">
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- Modal Tambah Profil -->

<!-- Modal Edit Profil
<?php foreach (profil as $p){ ?>
    <div class="modal fade" id="modalEditProfil<?php echo base_url().'admin/profil/'.$p->id_profil; ?>" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-dark">
            <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff;"><i class="fas fa-book-open"> </i><b> Tambah rofil</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #fff;">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?php echo base_url().'admin/update_profil' ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label><i class="fas fa-list text-danger"></i> Kategori</label>
                <select name="id_kategori" class="form-control">
                  <option value="<?php echo $p->id_kategoriprofil; ?>"><?php echo $p->nama_kategoriprofil; ?></option>
                  <?php foreach ($kategoriprofil as $k) { ?>
                    <option value="<?php echo $k->id_kategoriprofil; ?>"><?php echo $k->nama_kategoriprofil; ?></option>
                  <?php } ?>
                </select>
                <?php echo form_error('id_kategoriprofil'); ?>
              </div>

              <div class="form-group">
                <label><i class="fas fa-book text-danger"></i> Judul Profil</label>
                <input type="hidden" name="id" value="<?php echo $p->id_profil; ?>">
                <input type="text" name="judul_profil" class="form-control" value="<?php echo $p->judul_profil; ?>">
                <?php echo form_error('judul_profil'); ?>
              </div>

              <div class="form-group">
                <label><i class="fas fa-user text-danger"></i> Pengarang</label>
                <input type="text" name="pengarang" class="form-control" value="<?php echo $p->isi_satu; ?>">
                <?php echo form_error('isi_satu'); ?>
              </div>

              <div class="form-group">
                <label><i class="fas fa-building text-danger"></i> Isi Satu</label>
                <input type="text" name="isi_satu" class="form-control" value="<?php echo $p->isi_dua; ?>">
                <?php echo form_error('isi_dua'); ?>
              </div>

              <div class="form-group">
                <label><i class="fas fa-image text-danger"></i> Gambar</label><br>
                <?php
                if(isset($b->gambar)){
                  echo '<input type="hidden" name="old_pict" value="'.$b->gambar.'">';
                  echo '<img src="'.base_url().'assets/upload/'.$b->gambar.'" width="30%">';
                  }
                  ?>
                  <br>  
                <input name="foto" type="file" class="form-control">
              </div>

              <div class="form-group">
                <input type="submit" value="Update" class="btn btn-primary btn-sm">
                <input type="button" value="Kembali" class="btn btn-danger btn-sm" onclick="window.history.go(-1)">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
Modal Edit Profil -->

<!--Bagian Footer -->
</div>
  </div>
    <footer class="footer">
      <div class="container-fluid">
        <div class="copyright ml-left">
          Copyright © 2020, made with <i class="fa fa-heart heart text-danger"></i> by <a href="#">SMP N 1 TUREN</a>
        </div>        
      </div>
    </footer>
  </div>
</div>
<!-- Bagian Footer -->