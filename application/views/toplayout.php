<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?php echo base_url().'member' ?>">
			<img src="<?php echo base_url().'assets_v2/img/website-logo/logosmp.png' ?>" alt="logoweb" width="150">
		</a>
		<button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation" style="border: none;">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url().'member' ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url().'profil/profil_sekolah' ?>">Profil Sekolah</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item">				
					<?php 
					$text_cart_url = '<div class="nav-link" style="color: #fff; margin-top: 1px;"><i class="fa fa-shopping-cart"></i> Booking Cart : ' . $this->M_perpus->edit_data(array('id_anggota'=>$this->session->userdata('id_agt')),'transaksi')->num_rows() .' Buku </div>';;
					?>
					 <?=anchor('peminjaman/lihat_keranjang', $text_cart_url)?>		
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item dropdown">
				  <?php if($this->session->userdata('id_agt')) { ?>
		          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Halo Selamat Datang, <b><?=$this->session->userdata('nama_agt')?></b>
		      	  </a>
		          <?php } ?>
			      <div class="dropdown-menu" aria-labelledby="dropdown01">
					<a class="dropdown-item" href="<?php echo base_url().'admin/logout'?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
				  </div>
		        </li>
			</ul>
		</div>
	</div>
</nav>