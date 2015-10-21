<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengaturanArtikel extends CI_Controller {
function __construct(){
		parent::__construct();
		$this->load->model('m_artikel');
	}
	
	public function index()
	{
		$data['dataNotulen'] = $this->m_artikel->getArtikel();
		$this->load->view('theme/index',$data);
	}
	
	function simpan_artikel(){
		$idPengguna = $_SESSION['idPengguna'];
		$judul = $_POST['judul'];
		$tgl_buat = date('Y-m-d');
		$isi_artikel = $_POST['isi_artikel'];
		
		$data = array(
			'id_pengguna'	=>	$idPengguna,
			'judul_artikel'	=>	$judul,
			'isi'	=>	$isi_artikel,
			'tgl_buat'	=>	$tgl_buat
		);
		
		$this->db->insert('tbl_artikel',$data);
		redirect(base_url('pengaturanArtikel'));
		
	}
	
	function get_artikel(){
		$param = $_POST['param'];
		$result = $this->db->get_where('tbl_artikel',array('id_artikel'=>$param));
		echo json_encode($result->result_array());
	}
	
	function simpan_edit_artikel(){
		$id_artikel = $_POST['idArtikel'];
		
		$idPengguna = $_SESSION['idPengguna'];
		
		$judul = $_POST['judul'];
		$isi = $_POST['isi_artikel_edit'];
		
		$data = array(
				'id_pengguna'	=>	$idPengguna,
				'judul_artikel'	=>	$judul,
				'isi'	=>	$isi,
				'tgl_buat'	=>	date('Y-m-d')
			);
		
		
		
		$this->db->where('id_artikel', $id_artikel);
		$this->db->update('tbl_artikel', $data); 
		redirect(base_url('pengaturanArtikel'));
	}
	
	function hapus_artikel(){
		$id_notulen = $_POST['txtIDArtikelHapus'];
		$this->db->delete('tbl_artikel', array('id_artikel' => $id_notulen)); 
		redirect(base_url('pengaturanArtikel'));
	}
	
################################################################################################
/*
	NOTULEN
					*/
################################################################################################
	
	function suratmasuk(){
		$data['dataSuratMasuk'] = $this->m_surat->getSuratMasuk();
		$this->load->view('theme/index',$data);
	}
	
	function get_surat_masuk(){
		$param = $_POST['param'];
		$result = $this->db->get_where('tbl_surat_masuk',array('id_surat_masuk'=>$param));
		//print_r($result->result_array());
		echo json_encode($result->result_array());
		//return $result->result_array();
	}
	
	function simpan_surat_masuk(){
		$perihal = $_POST['perihal'];
		$perusahaan = $_POST['perusahaan'];
		$pengirim = $_POST['pengirim'];
		$email = $_POST['email'];
		$tglmasuk = $_POST['tglmasuk'];
		
		$data = array(
			'perihal'	=>	$perihal,
			'perusahaan'	=>	$perusahaan,
			'pengirim'	=>	$pengirim,
			'email_pengirim'	=>	$email,
			'tgl_masuk'	=>	$tglmasuk,
			'status'	=>	0
		);
		
		$this->db->insert('tbl_surat_masuk',$data);
		redirect(base_url('surat/suratmasuk'));
		
	}
	
	function simpan_edit_surat_masuk(){
		$id_SM = $_POST['idSuratMasuk'];
		$perihal = $_POST['perihal'];
		$nosurat = $_POST['nosurat'];
		$tujuan = $_POST['tujuan'];
		$jenis_dokumen = $_POST['jenisdok'];
		$tglkeluar = $_POST['tglkeluar'];
		
		$data = array(
			'perihal'	=> $perihal,
			'no_surat_keluar'	=> $nosurat,
			'tujuan'	=> $tujuan,
			'jenis_dokumen'	=> $jenis_dokumen,
			'tgl_kirim'	=> $tglkeluar,
		);
		
		$this->db->where('id_surat_keluar', $id_SM);
		$this->db->update('tbl_surat_keluar', $data); 
		redirect(base_url('surat/suratkeluar'));
	}
	
	function hapus_surat_masuk(){
		$id_SM = $_POST['txtIDSMHapus'];
		$this->db->delete('tbl_surat_masuk', array('id_surat_masuk' => $id_SM)); 
		redirect(base_url('surat/suratmasuk'));
	}
	
################################################################################################
/*
	SURAT KELUAR
					*/
################################################################################################
					
	function suratkeluar(){
		$data['dataSuratMasuk'] = $this->m_surat->getSuratKeluar();
		$this->load->view('theme/index',$data);
	}
	
	function simpan_surat_keluar(){
		$perihal = $_POST['perihal'];
		$no_dok = $_POST['nodok'];
		$tanggal = $_POST['tanggal'];
		$tujuan = $_POST['tujuan'];
		$jenis_dok = $_POST['jenisdok'];
		
		$data = array(
			'perihal'	=>	$perihal,
			'no_surat_keluar'	=>	$no_dok,
			'tgl_kirim'	=>	$tanggal,
			'tujuan'	=>	$tujuan,
			'jenis_dokumen'	=>	$jenis_dok,
			'status'	=>	0
		);
		
		$this->db->insert('tbl_surat_keluar',$data);
		redirect(base_url('surat/suratkeluar'));
		
	}
	
	function get_surat_keluar(){
		$param = $_POST['param'];
		$result = $this->db->get_where('tbl_surat_keluar',array('id_surat_keluar'=>$param));
		echo json_encode($result->result_array());
	}
	
	function hapus_surat_keluar(){
		$id_SK = $_POST['txtIDSKHapus'];
		$this->db->delete('tbl_surat_keluar', array('id_surat_keluar' => $id_SK)); 
		redirect(base_url('surat/suratkeluar'));
	}
	
}
