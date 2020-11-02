<!-- Detail Buku -->
<div style="margin-top: 50px;">
<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<div class="row justify-content-center align-items-center mb-1">
				<div class="col-lg-12">
					<div class="card card-pricing">
						<h2 class="panel-title"><i class="fas fa-book-open text-dark"></i> Detail Buku</h2>
							<div class="card-header">
								<img class="card" align="left" src="<?php echo base_url();?>assets/upload/<?=$gambar;?>" style="margin-right: 20px; height: 260px; width: 190px;">
									<div class="list-group">
										<ul class="specification-list">
											<li style="font-size: 14px;">
												<span class="name-specification text-dark"><b>Judul Buku :</b></span>
												<span class="status-specification"><?=substr($judul,0).'' ?></span>
											</li>
											<li style="font-size: 14px;">
												<span class="name-specification text-dark"><b>Pengarang :</b></span>
												<span class="status-specification"><?=$pengarang?></span>
											</li>
											<li style="font-size: 14px;">
												<span class="name-specification text-dark"><b>Penerbit :</b></span>
												<span class="status-specification"><?=$penerbit ?></span>
											</li>
											<li style="font-size: 14px;">
												<span class="name-specification text-dark"><b>Tahun Terbit :</b></span>
												<span class="status-specification"><?=substr($tahun,0,4) ?></span>
											</li>
											<li style="font-size: 14px;">
												<span class="name-specification text-dark"><b>ISBN Buku :</b></span>
												<span class="status-specification"><?=$isbn ?></span>
											</li>
											<li style="font-size: 14px;">
												<span class="name-specification text-dark"><b>Kategori Buku : </b></span>
												<span class="status-specification"><?=$kategori ?></span>
											</li>
										</ul>
									</div>
									<div align="center">
										<a href="#" class="btn btn-dark btn-sm" onclick="window.history.go(-1)"> Kembali</a>
										<?=anchor('peminjaman/tambah_peminjaman/'. $id, 'Booking' , [
											'class' => 'btn btn-dark btn-sm',
											'role'	=> 'button'
										])?>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Detail Buku -->