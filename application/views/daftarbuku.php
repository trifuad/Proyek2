<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Perpustakaan SMPN 1 Turen<?=$title?> </title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?php echo base_url().'assets_v2/img/favicon/smp-icon.png'?>" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets_v2/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets_v2/css/atlantis.min.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets_v2/css/fonts.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets_v2/css/animate.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets_v2/sweetalert2/sweetalert2.min.css' ?>">
    <script type="text/javascript" src="<?php echo base_url().'assets_v2/js/core/jquery.3.2.1.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets_v2/js/core/popper.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets_v2/js/core/bootstrap.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets_v2/js/plugin/datatables/datatables.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets_v2/js/plugin/webfont/webfont.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets_v2/js/atlantis.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets_v2/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets_v2/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets_v2/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets_v2/sweetalert2/sweetalert2.all.min.js' ?>"></script>
    <script>
    WebFont.load({
      google: {"families":["Lato:300,400,700,900"]},
      custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets_v2/css/fonts.min.css']},
      active: function() {
        sessionStorage.fonts = true;
      }
    });
    </script>
</head>
<body onload="myFunction()">
	<div class="wrapper overlay-sidebar">
		<div><?php $this->load->view('toplayout') ?></div>
	<!-- Preloader Dengan Gambar, CSS dan JavaScript -->
	<div id="loader">
	    <img src="<?php echo base_url().'assets_v2/img/loader/azure.svg'?>" alt="...">
	      <link rel="stylesheet" type="text/css" href="assets_v2/loader/loader.css">
	      <script type="text/javascript" src="assets_v2/loader/loader.js"></script>
	</div> 
	<!-- Preloader Dengan Gambar, CSS dan JavaScript -->

	<div class="main-panel" id="content">
		<div class="content animated fadeIn slow">
			<!-- Alert Jika booking buku yang sama -->
			<?php if($this->session->flashdata()) 
			{ 
				echo "<div class='alert alert-danger alert-primary'>";
				echo $this->session->flashdata('alert');
				echo "</div>";
			} 
			?>
			<!-- Alert Jika booking buku yang sama -->

	<!-- List Buku -->
	<div class="content animated fadeIn slow">
		<div class="row">
			<?php foreach($buku as $buku) { ?>
			<div class="col-md-3">
					<div class="card-body">
						<div class="card mb-4 box-shadow">
							<img class="card-img-top" style="display: block; margin: 10 auto; height: 300px; width: 250px;" src="<?php echo base_url(); ?>assets/upload/<?=$buku->gambar;?>">
							<div class="card-body">
								<h5 class="card-title mb-3 fw-mediumbold" align="center"><?=substr($buku->judul_buku,0,22).''?></h5>
								<p class="card-text">Pengarang : <?=$buku->pengarang?></p>
								<p class="card-text">Penerbit : <?=$buku->penerbit?></p>
								<p class="card-text">Tahun Terbit : <?=substr($buku->thn_terbit,0,4)?></p>
								<p class="card-text">Buku Tersisa : <?=$buku->jumlah_buku?></p>
								<p>
									<?=anchor('peminjaman/tambah_peminjaman/'.$buku->id_buku,'BOOKING BUKU',[
									'class' => 'btn btn-dark btn-sm',
									'role' => 'button',
									'style' => 'display: block; margin: auto;'
									])?>
								</p>
								<p>
									<?=anchor('buku/katalog_detail?id_buku='.$buku->id_buku,'DETAILS BUKU',[
									'class' => ' btn btn-success btn-sm',
									'role' =>  'button',
									'style' => 'display: block; margin: auto;'
									])?>
								</p>
							</div>
						</div>
					</div>	
				</div>
				<?php } ?>
			</div>
		</div>
	<!-- List Buku -->
</div> <!-- Overlay Sidebar -->
<script type="text/javascript">
	$('.alert-message').alert().delay(3000).slideUp('slow');
</script>
</body>
</html>