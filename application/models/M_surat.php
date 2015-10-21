<?php
	Class M_surat extends CI_Model{
		
	function index()
	{
			return;
	}
	
	function getSuratMasuk(){
		$this->db->select('*');
		$this->db->from('tbl_surat_masuk');
		return $this->db->get()->result_array();
	}
	
	function getSuratKeluar(){
		$this->db->select('*');
		$this->db->from('tbl_surat_keluar');
		return $this->db->get()->result_array();
	}
	
	}
?>