<div style="margin-top: 50px;">
   <div class="content">
      <div class="page-inner">
         <div class="page-header">
            <div class="row justify-content-center align-items-center mb-1">
               <div class="col-lg-12">
                  <div class="card">
                     <div class="card-header">
                       <?php 
                         foreach ($anggota as $a){
                       ?>
                       <div class="card-title"><i class="fas fa-shopping-cart text-dark"></i> Booking Cart</div>
                     </div>
                     <?php }  ?>
                     <div class="card-body">
                       <a class="btn btn-dark btn-sm" href="<?php echo base_url().'member';?>"><i class="fas fa-arrow-left"></i> Lanjutkan Booking Buku</a>
                       <a style="float: right; margin-bottom: 10px;" class="btn btn-dark btn-sm" href="<?php echo base_url().'peminjaman/selesai_booking/'.$this->session->userdata('id_agt');?>"> Selesaikan Booking Buku <i class="fas fa-arrow-right"></i></a>
                       <div class="table-responsive">
                         <table class="display table table-bordered table-hover">
                           <thead class="bg-dark text-white text-center">
                             <tr>
                               <th width="3%">No</th>
                               <th>Gambar</th>
                               <th>Judul Buku</th>
                               <th>Pengarang</th>
                               <th>Penerbit</th>
                               <th>Tahun Terbit</th>
                               <th>Pilihan</th>
                             </tr>
                           </thead>
                           <tbody class="text-center">
                           <?php 
                             $no = 1;
                             foreach($peminjaman as $b){
                           ?>
                           <tr>
                             <td><?php echo $no++ ?></td>
                             <td><img src="<?php echo base_url();?>assets/upload/<?php echo $b->gambar; ?>" width="70"></td>
                             <td><?php echo $b->judul_buku; ?></td>
                             <td><?php echo $b->pengarang; ?></td>
                             <td><?php echo $b->penerbit; ?></td>
                             <td><?php echo $b->thn_terbit; ?></td>
                             <td>
                               <a class="btn btn-dark btn-sm" href="<?php echo base_url().'peminjaman/hapus_keranjang/'.$b->id_buku; ?>"><i class="fas fa-trash"></i> Hapus</a>
                             </td>
                           </tr>
                           <?php } ?>
                         </tbody>
                       </table>
                     </div>
                   </div>
                 </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
