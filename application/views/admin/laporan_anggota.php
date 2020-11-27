<div class="main-panel"><br>
  <div class="content">
    <div class="col">
      <div class="panel animated bounceInUp slow">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-print text-danger"></i> Laporan Data Anggota</h3>
          </div>
          <div class="card-body">
            <a style="margin-bottom: 10px;" class="btn btn-primary btn-sm" href="<?php echo base_url().'admin/laporan_print_anggota' ?>"><i class="fas fa-print"></i> Print Lap.Anggota</a>
            <a style="margin-bottom: 10px;" class="btn btn-success btn-sm" href="<?php echo base_url().'#'?>"><i class="fas fa-file-excel"></i> Export Excel Lap.Anggota</a>
            <a style="margin-bottom: 10px;" class="btn btn-warning btn-sm" href="<?php echo base_url().'admin/laporan_pdf_anggota' ?>"><i class="fas fa-file-pdf"></i> Cetak PDF Lap.Anggota</a>
          <div class="table-responsive">
            <table id="basic-datatables" class="display table table-striped table-hover table-head-bg-danger" >
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Anggota</th>
                  <th>Gender</th>
                  <th>No.Telpon</th>
                  <th>Alamat</th>
                  <th>Email</th>
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
          Copyright © 2020, made with <i class="fa fa-heart heart text-danger"></i> by <a href="#">SSMP 1 Turen</a>
        </div>        
      </div>
    </footer>
  </div>
  </div>
<!-- Bagian Footer -->