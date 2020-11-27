<div style="margin-top: 70px;">
   <div class="content">
      <div class="col-md-12">
         <div class="panel animated fadeIn slower">
            <div class="card">
	            <div class="card-header">
	               <?php 
	               	foreach ($useraktif as $a){
	               ?>
	            <div class="card-title"><i class="fas fa-shopping-cart text-dark"></i> Details Transaksi Peminjaman Buku</div>
            </div>
            <?php } ?>
            <div class="card-body">
              <h4 class="h4" style="margin-left: 15px;">Berikut adalah buku yang kamu pinjam :</h4>
               <div class="table-responsive">
                  <table class="display table table-bordered table-hover" >
	                  <thead class="bg-dark text-white text-center">
	                    <tr>
		                     <th width="3%">No</th>
		                     <th>Gambar</th>
		                     <th>Judul Buku</th>
		                     <th>Pengarang</th>
		                     <th>Penerbit</th>
		                     <th>Tahun Terbit</th>
	                    </tr>
	                  </thead>
	                  <tbody class="text-center">
	                  <?php 
	                    $no = 1;
	                    foreach($items as $b){
	                  ?>
	                  	<tr>
		                     <td><?php echo $no++ ?></td>
		                     <td><img src="<?php echo base_url();?>assets/upload/<?php echo $b->gambar; ?>" width="70"></td>
		                     <td><?php echo $b->judul_buku; ?></td>
		                     <td><?php echo $b->pengarang; ?></td>
		                     <td><?php echo $b->penerbit; ?></td>
		                     <td><?php echo substr($b->thn_terbit,0,4); ?></td>
	                  	</tr>
	                  <?php } ?>
	                	</tbody>
                  </table>
               </div>
            </div>
          	<div style="margin-left: 20px; margin-bottom: 20px;">
            	<a class="btn btn-success btn-block" href="<?php echo base_url().'peminjaman/peminjaman_selesai/'.$this->session->userdata('id_agt');?> "><i class="fas fa-check"></i> Lakukan Transaksi</a>
          	</div>
        </div>
      </div>
    </div>
  </div>
