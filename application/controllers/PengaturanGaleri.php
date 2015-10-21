<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengaturanGaleri extends CI_Controller {
function __construct(){
		parent::__construct();
		$this->load->model('m_galeri');
	}
	
	public function index()
	{
		$data['dataNotulen'] = $this->m_galeri->getGaleri();
		$this->load->view('theme/index',$data);
	}
	
	function simpan_foto(){
		$idPengguna = $_SESSION['idPengguna'];
		$nama_foto = $_POST['nama_foto'];
		$tgl_upload = date('Y-m-d');
		$keterangan = $_POST['keterangan'];
		
		//$lampiran = $_POST['tglmasuk'];
		$namaLampiran = $_FILES['lampiran']['name'];
		$path = $this->config->item('folder_upload_path');
		$location = $path.$_FILES['lampiran']['name']; 
		
		move_uploaded_file($_FILES['lampiran']['tmp_name'], $location); 
		
		$data = array(
			'id_pengguna'	=>	$idPengguna,
			'nama_foto'	=>	$nama_foto,
			'keterangan'	=>	$keterangan,
			'tgl_upload'	=>	$tgl_upload,
			'url'	=>	$namaLampiran
		);
		
		$this->db->insert('tbl_galeri',$data);
		redirect(base_url('pengaturanGaleri'));
		
	}
	
	function get_galeri(){
		$param = $_POST['param'];
		$result = $this->db->get_where('tbl_galeri',array('id_galeri'=>$param));
		echo json_encode($result->result_array());
	}
	
	function simpan_edit_foto(){
		$id_galeri = $_POST['idGaleri'];
		
		$idPengguna = $_SESSION['idPengguna'];
		
		$nama_foto = $_POST['nama_foto'];
		$keterangan = $_POST['keterangan'];

		
		$lampiranNama = $_FILES['lampiran']['name'];
		$path = $this->config->item('folder_upload_path');
		
		if($lampiranNama == '' || $lampiranNama == null){
			$data = array(
				'id_pengguna'	=>	$idPengguna,
				'nama_foto'	=>	$nama_foto,
				'keterangan'	=>	$keterangan
			);
		}else{
			$data = array(
				'id_pengguna'	=>	$idPengguna,
				'nama_foto'	=>	$nama_foto,
				'keterangan'	=>	$keterangan,
				'tgl_upload'	=>	date('Y-m-d'),
				'url'	=>	$lampiranNama
			);
			
			$location = $path.$_FILES['lampiran']['name']; 
			move_uploaded_file($_FILES['lampiran']['tmp_name'], $location); 
		}
		
		
		$this->db->where('id_galeri', $id_galeri);
		$this->db->update('tbl_galeri', $data); 
		redirect(base_url('pengaturanGaleri'));
	}
	
	function hapus_galeri(){
		$id_galeri = $_POST['txtIDGaleriHapus'];
		$this->db->delete('tbl_galeri', array('id_galeri' => $id_galeri)); 
		redirect(base_url('pengaturanGaleri'));
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
