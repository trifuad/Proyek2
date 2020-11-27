<div class="main-panel"><br>
  <div class="content">
    <div class="col">
      <div class="panel animated bounceInUp slow">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-print text-danger"></i> Laporan Data Buku</h3>
          </div>
          <div class="card-body">
            <a style="margin-bottom: 10px;" class="btn btn-primary btn-sm" href="<?php echo base_url().'admin/laporan_print_buku' ?>"><i class="fas fa-print"></i> Print Lap.Buku</a>
            <a style="margin-bottom: 10px;" class="btn btn-success btn-sm" href="<?php echo base_url().'#'?>"><i class="fas fa-file-excel"></i> Export Excel Lap.Buku</a>
            <a style="margin-bottom: 10px;" class="btn btn-warning btn-sm" href="<?php echo base_url().'admin/laporan_pdf_buku' ?>"><i class="fas fa-file-pdf"></i> Cetak PDF Lap.Buku</a>
          <div class="table-responsive">
            <table id="basic-datatables" class="display table table-striped table-hover table-head-bg-danger" >
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul Buku</th>
                  <th>Pengarang</th>
                  <th>Penerbit</th>
                  <th>Tahun Terbit</th>
                  <th>ISBN</th>
                  <th>Lokasi</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($buku as $b) {
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $b->judul_buku ?></td>
                  <td><?php echo $b->pengarang ?></td>
                  <td><?php echo $b->penerbit ?></td>
                  <td><?php echo $b->thn_terbit ?></td>
                  <td><?php echo $b->isbn ?></td>
                  <td><?php echo $b->lokasi ?></td>
                  <td>
                    <?php
                    if($b->status_buku == "1"){
                      echo "Tersedia";
                    }else if($b->status_buku == "0"){
                      echo "Sedang dipinjam";
                    }
                    ?>
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