<?php
	Class M_galeri extends CI_Model{
		
	function index()
	{
			return;
	}
	
	function getGaleri(){
		$this->db->select('*');
		$this->db->from('tbl_galeri');
		return $this->db->get()->result_array();
	}
	
	function getSuratKeluar(){
		$this->db->select('*');
		$this->db->from('tbl_surat_keluar');
		return $this->db->get()->result_array();
	}
	
	}
?>