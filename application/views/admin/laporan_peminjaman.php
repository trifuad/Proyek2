<div class="main-panel">
    <div class="content">
    	<div class="col-md-12">
    		<div class="panel animated fadeIn slower">
		        <div class="card">
					<div class="card-header">
						<h3 class="card-title"><i class="fas fa-print text-danger"></i> Laporan Transaksi Peminjaman</h3>
					</div>
					<div class="card-body">
						<form method="post" action="<?php echo base_url().'admin/laporan_peminjaman' ?>">
							<div class="form-group">
								<label><i class="fas fa-calendar text-danger"></i> Dari Tanggal</label>
								<input type="date" name="dari" class="form-control">
								<?php echo form_error('dari'); ?>
							</div>

							<div class="form-group">
								<label><i class="fas fa-calendar text-danger"></i> Sampai Tanggal</label>
								<input type="date" name="sampai" class="form-control">
								<?php echo form_error('sampai'); ?>
							</div>

							<div class="form-group">
								<input type="submit" value="CARI" name="cari" class="btn btn-sm btn-danger">
							</div>
						</form>
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