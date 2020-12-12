<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	public function index(){
		$data = array(
			'login_title' => 'Login Perpustakaan SMPN 1 Turen',
		);
		$this->load->view('login',$data);
	}

	public function login(){
		// Array Untuk Judul Title dan Footer
		$data = array(
			'login_tile' => 'Login Perpustakaan SMPN 1 Turen',
			'footer_title' => 'Copyright &copy;', 
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

	public function forgot_pass() {
		$data = array(
			'login_tile' => 'Lupa Password',
			'footer_title' => 'Copyright &copy;', 
		);
		$this->load->view('forgot_pass');
	}

	public function forgot_pass_act(){
		// Array Untuk Judul Title dan Footer
		$data = array(
			'login_tile' => 'Lupa Password',
			'footer_title' => 'Copyright &copy;', 
		);

		$username = $this->input->post('username');
		$pass_baru = $this->input->post('pass_baru');
		$ulang_pass = $this->input->post('ulang_pass');

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('pass_baru','Password Baru','required|matches[ulang_pass]');
		$this->form_validation->set_rules('ulang_pass','Ulangi Password Baru','required');

		if($this->form_validation->run() != false){
			$where = array('username'=>$username);
			$data = $this->M_perpus->edit_data($where,'admin');
			$d = $this->M_perpus->edit_data($where,'admin')->row();
			$cek = $data->num_rows();

			if($cek > 0){
				$data = array('password' => md5($pass_baru));
				$this->M_perpus->update_data('admin',$data,$where);
				redirect(base_url().'welcome/forgot_pass?pesan=berhasil');
			} else {
				$dt = $this->M_perpus->edit_data($where,'anggota');
				$hasil = $this->M_perpus->edit_data($where, 'anggota')->row();
				$proses = $dt->num_rows();

				if($proses > 0){
					$data = array('password' => md5($pass_baru));
					$this->M_perpus->update_data('anggota',$data,$where);
					redirect(base_url().'welcome/forgot_pass?pesan=berhasil');
				} else{
					$this->session->set_flashdata('alert','Username salah');
					redirect(base_url().'welcome/forgot_pass');
				}	
			}
		} else {
				$this->session->set_flashdata('alert','Anda Belum mengisi username atau password');
				$this->load->view('forgot_pass',$data);
			}
	}
}
