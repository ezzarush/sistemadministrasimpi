<?php
	Class M_artikel extends CI_Model{
		
	function index()
	{
			return;
	}
	
	function getArtikel(){
		$this->db->select('*');
		$this->db->from('tbl_artikel');
		return $this->db->get()->result_array();
	}
	
	function getSuratKeluar(){
		$this->db->select('*');
		$this->db->from('tbl_surat_keluar');
		return $this->db->get()->result_array();
	}
	
	}
?>