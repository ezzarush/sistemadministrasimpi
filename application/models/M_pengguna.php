<?php
	Class M_pengguna extends CI_Model{
		
	function index()
	{
			return;
	}
	
	function getPengguna(){
		$this->db->select('a.nama_lengkap, a.nip, a.alamat, b.username, b.hak_akses, b.status_aktif, b.id_pengguna');
		$this->db->from('tbl_master_pengguna a');
		$this->db->JOIN('tbl_pengguna b','b.id_master_pengguna=a.id_master_pengguna');
		return $this->db->get()->result_array();
	}
	
	function getSuratKeluar(){
		$this->db->select('*');
		$this->db->from('tbl_surat_keluar');
		return $this->db->get()->result_array();
	}
	
	}
?>