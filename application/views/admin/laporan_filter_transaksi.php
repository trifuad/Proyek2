<div class="main-panel"><br>
    <div class="content">
        <div class="col-md-12">
        	<div class="panel animated fadeIn slower">
	        	<div class="card">
					<div class="card-header">
						<h3 class="card-title"><i class="fas fa-print text-danger"></i> Laporan Transaksi Peminjaman</h3>
					</div>
					<form method="post" action="<?php echo base_url().'admin/laporan' ?>">
						<div class="form-group">
							<label><i class="fas fa-calendar-alt text-danger"></i> Dari Tanggal</label>
							<input type="date" name="dari" value="<?php echo set_value('dari'); ?>" class="form-control">
							<?php echo form_error('dari'); ?>
						</div>

						<div class="form-group">
							<label><i class="fas fa-calendar-alt text-danger"></i> Sampai Tanggal</label>
							<input type="date" name="sampai" value="<?php echo set_value('sampai'); ?>" class="form-control">
							<?php echo form_error('sampai'); ?>
						</div>

						<div class="form-group">
							<input type="submit" value="CARI" name="cari" class="btn btn-danger btn-sm">
						</div>
					</form>

			<div class="btn-group">
				<a style="margin-left: 10px;" class="btn btn-primary btn-sm" href="<?php echo base_url().'admin/laporan_print_peminjaman/?dari='.set_value('dari').'&sampai='.set_value('sampai') ?>"><i class="fas fa-print"></i> Cetak Print</a>
				<a style="margin-left: 10px;" class="btn btn-success btn-sm" href="<?php echo base_url().'#'?>"><i class="fas fa-file-excel"></i> Export Excel</a>
				<a style="margin-left: 10px;" class="btn btn-warning btn-sm" href="<?php echo base_url().'admin/laporan_pdf_peminjaman/?dari='.set_value('dari').'&sampai='.set_value('sampai') ?>"><i class="fas fa-file-pdf"></i> Cetak PDF</a>
			</div>
			<br>
			<div class="table-responsive">
				<table class="table table-striped table-hover table-bordered table-head-bg-danger" id="basic-datatables">
					<thead>
						<tr>
							<th>No</th>
							<th>Tanggal</th>
							<th>Nama Anggota</th>
							<th>Judul Buku</th>
							<th>Tgl. Pinjam</th>
							<th>Tgl. Kembali</th>
							<th>Denda / Hari</th>
							<th>Tgl. Dikembalikan</th>
							<th>Total Denda</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$no=1;
							foreach($laporan as $l){
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo date('d/m/y', strtotime($l->tgl_pencatatan)); ?></td>
							<td><?php echo $l->nama_anggota; ?></td>
							<td><?php echo $l->judul_buku; ?></td>
							<td><?php echo date('d/m/y', strtotime($l->tgl_pinjam)); ?></td>
							<td><?php echo date('d/m/y', strtotime($l->tgl_kembali)); ?></td>
							<td><?php echo "Rp. ".number_format($l->denda); ?></td>
							<td>
								<?php 
								if($l->tgl_pengembalian == "00-00-000"){
									echo "-";
								}else{
									echo date('d/m/y', strtotime($l->tgl_pengembalian));
								}
								?>
							</td>
							<td><?php echo $l->total_denda; ?></td>
							<td>
								<?php 
								if($l->status_peminjaman == "1"){
									echo "Selesai";
								}else{
									echo "-";
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