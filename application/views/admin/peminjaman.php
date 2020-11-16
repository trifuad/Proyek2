<div class="main-panel"><br>
  <div class="content">
    <!-- Card -->
      <div class="col">
        <div class="panel animated fadeIn slower">
          <div class="card">
            <div class="card-header bg-dark">
              <h3 class="card-title text-white"><i class="fas fa-retweet"></i> Data Transaksi Peminjaman</h3>
              <!-- <button style="margin-left: 35px;" type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target=".modal-tambah-peminjaman"><i class="fas fa-plus"></i> Tambah Transaksi</button> -->
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="basic-datatables" class="display table table-striped table-hover">
                  <thead class="bg-dark text-white">
                    <tr>
                      <th>No</th>
                      <th>Nama Anggota</th>
                      <th>Judul Buku</th>
                      <th>Tgl. Pinjam</th>
                      <th>Tgl. Kembali</th>
                      <th>Denda/Hari</th>
                      <th>Tgl. Dikembalikan</th>
                      <th>Total Denda</th>
                      <th>Status Buku</th>
                      <th>Status Pinjam</th>
                    </tr>
                  </thead>
                  <tbody>
                        <?php
                          $no = 1;
                          foreach ($peminjaman as $p) {
                        ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $p->nama_anggota; ?></td>
                          <td><?php echo $p->judul_buku; ?></td>
                          <td><?php echo date('d/m/Y',strtotime($p->tgl_pinjam)); ?></td>
                          <td><?php echo date('d/m/Y',strtotime($p->tgl_kembali)); ?></td>
                          <td><?php echo "Rp. ".number_format($p->denda); ?></td>
                          <td>
                            <?php
                            if($p->tgl_pengembalian =="0000-00-00"){
                              echo "-";
                            }else{
                              echo date('d/m/Y',strtotime($p->tgl_pengembalian));
                            } ?>
                          </td>
                          <td><?php echo "Rp. ".number_format($p->total_denda)." ,-"; ?></td>
                          <td>
                            <?php
                            if($p->status_pengembalian == "1"){
                              echo "Kembali";
                            }else{
                              echo "Belum Kembali";
                            } ?>
                          </td>
                          <td>
                            <?php
                            if($p->status_peminjaman == "1"){
                              echo "Selesai";
                            }else {
                              ?>
                              <a class="btn btn-sm btn-success" href="<?php echo base_url().'admin/transaksi_selesai/'.$p->id_pinjam; ?>"><span class="glyphicon glyphicon-ok"></span> Transaksi Selesai</a>
                              <br>
                              <a style="margin-top: 5px;" class="btn btn-sm btn-danger" href="<?php echo base_url().'admin/transaksi_hapus/'.$p->id_pinjam; ?>"><span class="glyphicon glyphicon-remove"></span> Batalkan Transaksi</a>
                            <?php } ?>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                  </div>
                </div>
              </div>
            </div>

<!--Bagian Footer -->
</div>
  </div>
    <footer class="footer">
      <div class="container-fluid">
        <div class="copyright ml-left">
          Copyright © 2020, made with <i class="fa fa-heart heart text-danger"></i> by <a href="#">SMP 1 Turen</a>
        </div>        
      </div>
    </footer>
  </div>
  </div>
<!-- Bagian Footer -->

      <!-- Modal Tambah Peminjaman
      <div class="modal fade modal-tambah-peminjaman" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #ffc107;">
              <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff;"><i class="fas fa-retweet"></i><b> Tambah Transaksi Baru</b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #fff;">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url().'admin/tambah_peminjaman_act' ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label><i class="fas fa-user"></i> Anggota</label>
                    <select name="anggota" class="form-control">
                      <option value="">-Pilih Anggota-</option>
                      <?php foreach ($anggota as $a) { ?>
                      <option value="<?php echo $a->id_anggota; ?>"><?php echo $a->nama_anggota; ?></option>
                      <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                  <label><i class="fas fa-book"></i> Buku</label>
                    <select name="buku" class="form-control">
                      <option value="">-Pilih Buku-</option>
                      <?php foreach ($buku as $b) { ?>
                      <option value="<?php echo $b->id_buku; ?>"><?php echo $b->judul_buku; ?></option>
                      <?php } ?>
                    </select>     
                </div>

                <div class="form-group">
                  <label><i class="fas fa-calendar-plus"></i> Tanggal Pinjam</label>
                  <input type="date" name="tgl_pinjam" class="form-control">            
                </div>

                <div class="form-group">
                  <label><i class="fas fa-calendar-times"></i> Tanggal Kembali</label>
                  <input type="date" name="tgl_kembali" class="form-control">            
                </div>

                <div class="form-group">
                  <label><i class="fas fa-money-check-alt"></i> Denda / Hari</label>
                  <input type="text" name="denda" class="form-control">      
                </div>

                <div class="form-group" align="right">
                  <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                  <input type="submit" value="Simpan" class="btn btn-primary btn-sm">
                </div>
              </form>
            </div>
          </div>
        </div>
              -->