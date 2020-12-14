<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	function __contruct(){
		parent::__construct();
		// Cek Login
		if($this->session->userdata('status') != "login"){
			$alert = $this->session->set_flashdata('alert','Anda Belum Login');
			redirect(base_url());
		}
	}

	public function index()
	{
		$data['anggota'] = $this->M_perpus->get_data('anggota')->result();
		$data['buku'] = $this->M_perpus->get_data('buku')->result();
		$data['profil'] = $this->M_perpus->get_data('profil')->result();

		$data['header'] = 'Katalog Buku';
		$data['title'] = 'Daftar Buku';

		$this->load->view('daftarbuku', $data);	
		$this->load->view('footer');
	}

}

/* End of file Member.php */
/* Location: ./application/controllers/Member.php */