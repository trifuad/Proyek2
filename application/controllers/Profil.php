<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	
	public function profil_sekolah(){
		$id = $this->uri->segment(3);
		$id_profil = $_GET['id_profil'];
		if ($id_profil!=null) {
			$profil = $this->db->query("SELECT * FROM profil p, kategoriprofil k WHERE j.id_kategoriprofil=k.id_kategoriprofil AND p.id_profil=".$id_profil)->result();
		
		foreach($profil as $fields){
			$data['judul'] = $fields->judul_profil;
			$data['kategoriprofil'] = $fields->kategoriprofil;
			$data['isi_satu'] = $fields->isi_satu;
			$data['isi_dua'] = $fields->isi_dua;
			$data['gambar'] = $fields->gambar;
			$data['idprofil'] = $fields->id_profil;
		}
		
		$this->load->view('desain');
		$this->load->view('toplayout');
		$this->load->view('profil_sekolah', $data);
		$this->load->view('footer');
		}
	}
}
/* End of file Profil.php */
/* Location: ./application/controllers/Profil.php */