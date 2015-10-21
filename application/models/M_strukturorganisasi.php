<?php
	Class M_strukturorganisasi extends CI_Model{
		
	function index()
	{
			return;
	}
	
	function getStrukturOrganisasi(){
		$this->db->select('*');
		$this->db->from('tbl_strukturorganisasi');
		return $this->db->get()->result_array();
	}
	
	function getSuratKeluar(){
		$this->db->select('*');
		$this->db->from('tbl_surat_keluar');
		return $this->db->get()->result_array();
	}
	
	}
?>