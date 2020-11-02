<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	public function index(){
		$data = array(
			'login_title' => 'Login - Aplikasi E-Library',
		);
		$this->load->view('login',$data);
	}

	public function login(){
		// Array Untuk Judul Title dan Footer
		$data = array(
			'login_tile' => 'Login - Aplikasi E-Library',
			'footer_title' => 'Copyright &copy; 2019 Fiqisulaiman', 
		);

		$username = $this->input->post('admin_username');
		$password = $this->input->post('admin_password');
		$this->form_validation->set_rules('admin_username','Username','trim|required');
		$this->form_validation->set_rules('admin_password','Password','trim|required');

		if($this->form_validation->run() != false){
			$where = array('username'=>$username, 'password'=>md5($password));

			$data = $this->M_perpus->edit_data($where,'admin');
			$d = $this->M_perpus->edit_data($where,'admin')->row();
			$cek = $data->num_rows();

			if($cek > 0){
				$session = array('id' => $d->id_admin,'nama' => $d->nama_admin,'status' =>'login');
				$this->session->set_userdata($session);
				redirect(base_url().'admin');
			}else{
				$dt = $this->M_perpus->edit_data($where,'anggota');
				$hasil = $this->M_perpus->edit_data($where, 'anggota')->row();
				$proses = $dt->num_rows();

				if($proses > 0){
						$session = array('id_agt' => $hasil->id_anggota, 'nama_agt' => $hasil->nama_anggota, 'status' => 'login');
						$this->session->set_userdata($session);
						redirect(base_url().'member');
					}else{
					$this->session->set_flashdata('alert','Login Gagal! Username atau Password Salah');
					redirect(base_url());
					}	
				}
		} else {
				$this->session->set_flashdata('alert','Anda Belum mengisi username atau password');
				$this->load->view('login',$data);
			}
	}
}
