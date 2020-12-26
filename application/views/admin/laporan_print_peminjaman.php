<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan | Laporan Print Buku</title>
</head>
<body>
<style>
	.table-data{
		width: 100%;
		border-collapse: collapse;
	}

	.table-data tr th,
	.table-data tr td{
		border: 1px solid #000;
		font-size: 10pt;
		text-align: center;
	}
</style>
<h3>Laporan Data Peminjaman Peprustakaan</h3>
<table>
	<tr>
		<td>Dari tgl</td>
		<td>:</td>
		<td><?php echo date('d/m/y', strtotime($_GET['dari'])); ?></td>
	</tr>
	<tr>
		<td>Sampai tgl</td>
		<td>:</td>
		<td><?php echo date('d/m/y', strtotime($_GET['sampai'])); ?></td>
	</tr>
</table>
<br>

<table class="table-data">
	<thead>
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
	          if($l->tgl_pengembalian =="0000-00-00"){
	            echo "-";
	          }else{
	            echo date('d/m/Y',strtotime($l->tgl_pengembalian));
	          } ?>
	        </td>
	        <td><?php echo "Rp. ".number_format($l->total_denda)." ,-"; ?></td>
	        <td>
	          <?php
	          if($l->status_pengembalian == "1"){
	            echo "Kembali";
	          }else{
	            echo "Belum Kembali";
	          } ?>
        	</td>
		</tr>
	</tbody>
	<?php } ?>
</table>
<script type="text/javascript">
	window.print();
</script>
</body>
</html>