<?php
	Class M_notulen extends CI_Model{
		
	function index()
	{
			return;
	}
	
	function getNotulen(){
		$this->db->select('*');
		$this->db->from('tbl_notulen');
		return $this->db->get()->result_array();
	}
	
	function getSuratKeluar(){
		$this->db->select('*');
		$this->db->from('tbl_surat_keluar');
		return $this->db->get()->result_array();
	}
	
	}
?>