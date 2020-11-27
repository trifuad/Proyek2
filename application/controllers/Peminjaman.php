<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {
	function __construct(){
		parent::__construct();
		// Cek Login
		if($this->session->userdata('status') !="login"){
			$alert=$this->session->set_flashdata('alert','Anda Belum Login');
			redirect(base_url());
		}
	}

	function index(){
		$data['peminjaman'] = $this->db->query("SELECT * FROM detail_pinjam D, peminjaman P, buku B, anggota A WHERE B.id_buku=D.id_buku AND A.id_anggota=P.id_anggota")->result();

		$this->load->view('admin/header');
		$this->load->view('admin/peminjaman', $data);
		$this->load->view('admin/footer');
	}

	// One to many

	function tambah_peminjaman($id){
		if($this->session->userdata('status') != "login"){
			$alert=$this->session->set_flashdata('alert','Anda belum Login');
			redirect(base_url());
		}else{
			$d = $this->M_perpus->find($id, 'buku');
			$tujuh_hari = mktime(0,0,0,date("n"),date("j")+14,date("Y"));
			$isi = array(
				'id_pinjam' => $this->M_perpus->kode_otomatis(),
				'tgl_pencatatan' => date('Y-m-d'),
				'id_anggota' => $this->session->userdata('id_agt'),
				'id_buku' => $id,
				'tgl_pinjam' => date('Y-m-d'),
				'tgl_kembali' => date('Y-m-d', $tujuh_hari),
				'denda' => '1000',
				'tgl_pengembalian' => '-',
				'total_denda' => '0',
				'status_pengembalian' => 'Belum Selesai',
				'status_peminjaman' => 'Belum Kembali'
			);

			$o = $this->M_perpus->edit_data(array('id_buku'=>$id),'transaksi')->num_rows();
			if($o > 0){
				$this->session->set_flashdata('alert','Buku ini sudah ada di keranjang');
				redirect(base_url().'member');
			}
			$this->M_perpus->insert_data($isi, 'transaksi');
			$this->M_perpus->insert_data($isi, 'orderan');
			$jml_buku = $d->jumlah_buku-1;
			$w = array('id_buku'=>$id);
			$data = array('jumlah_buku'=>$jml_buku);
			$this->M_perpus->update_data('buku', $data,$w);
			redirect(base_url().'member');
		}
	}

	function lihat_keranjang(){
		$data['anggota'] = $this->M_perpus->edit_data(array('id_anggota' => $this->session->userdata('id_agt')),'anggota')->result();
		$where = $this->session->userdata('id_agt');
		$data['peminjaman'] = $this->db->query("SELECT * FROM transaksi T,buku B,anggota A WHERE B.id_buku=T.id_buku AND A.id_anggota=T.id_anggota AND A.id_anggota=$where")->result();
		$d=$this->M_perpus->edit_data(array('id_anggota' => $this->session->userdata('id_agt')), 'transaksi')->num_rows();
		if($d > 0){
			$this->load->view('desain');
			$this->load->view('toplayout', $data);
			$this->load->view('keranjang', $data);
		}else{
			redirect('member');
		}
	}

	function hapus_keranjang($nomor){
		$w = array('id_buku' => $nomor);
		$data = $this->M_perpus->edit_data($w,'transaksi')->row();
		$ww = array('id_buku' => $data->id_buku);
		$data2 = array('status_buku' => '1');
		$this->M_perpus->update_data('buku',$data2,$ww);
		$this->M_perpus->delete_data($w,'transaksi');
		redirect(base_url().'peminjaman/lihat_keranjang');
	}

	public function selesai_booking($where){
		$d = $this->M_perpus->find($where, 'transaksi');
		$tujuh_hari = mktime(0,0,0,date("n"),date("j")+14,date("Y"));
		$isi = array(
			'id_pinjam' => $this->M_perpus->kode_otomatis(),
			'tanggal_input' => date('Y-m-d H:m:s'),
			'id_anggota' => $where,
			'tgl_pinjam' => date('Y-m-d'),
			'tgl_kembali' => date('Y-m-d', $tujuh_hari),
			'total_denda' => '0',
			'status_peminjaman' => 'Booking',
			'status_pengembalian' => 'Belum Kembali'
		);

		$this->M_perpus->insert_data($isi,'peminjaman');
		$this->M_perpus->insert_detail($where);
		$data['useraktif'] = $this->M_perpus->edit_data(array('id_anggota' => $this->session->userdata('id_agt')),'anggota')->result();
		$data['items'] = $this->db->query("SELECT * FROM peminjaman p, detail_pinjam d, buku b WHERE b.id_buku=d.id_buku AND d.id_pinjam=p.id_pinjam AND p.id_anggota=$where")->result();	
		$this->load->view('desain');
		$this->load->view('toplayout', $data);
		$this->load->view('info', $data);
	}

	function peminjaman_selesai($where){
		$d = $this->M_perpus->find($where, 'transaksi');
		$data['useraktif'] = $this->M_perpus->edit_data(array('id_anggota' => $this->session->userdata('id_agt')),'anggota')->result();
		$data['items'] = $this->db->query("SELECT * FROM peminjaman p, detail_pinjam d, buku b WHERE b.id_buku=d.id_buku AND d.id_pinjam=p.id_pinjam AND p.id_anggota=$where")->result();
		$this->M_perpus->kosongkan_data('detail_pinjam');
		$this->M_perpus->kosongkan_data('transaksi');
		$this->load->view('desain');
		$this->load->view('toplayout', $data);
		$this->load->view('selesai', $data);
	}
}

/* End of file Peminjaman.php */
/* Location: ./application/controllers/Peminjaman.php */