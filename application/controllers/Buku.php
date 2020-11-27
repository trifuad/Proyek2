<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {
	
	function katalog_detail(){
		$id = $this->uri->segment(3);
		$id_buku = $_GET['id_buku'];
		if ($id_buku!=null) {
			$buku = $this->db->query("SELECT * FROM buku b, kategori k WHERE b.id_kategori=k.id_kategori AND b.id_buku=".$id_buku)->result();
		
		foreach($buku as $fields){
			$data['judul'] = $fields->judul_buku;
			$data['pengarang'] = $fields->pengarang;
			$data['penerbit'] = $fields->penerbit;
			$data['kategori'] = $fields->nama_kategori;
			$data['tahun'] = $fields->thn_terbit;
			$data['isbn'] = $fields->isbn;
			$data['gambar'] = $fields->gambar;
			$data['id'] = $fields->id_buku;
		}
		
		$this->load->view('desain');
		$this->load->view('toplayout');
		$this->load->view('detail_buku', $data);
		$this->load->view('footer');
		}
	}
}
/* End of file Buku.php */
/* Location: ./application/controllers/Buku.php */