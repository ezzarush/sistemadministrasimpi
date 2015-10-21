<?php
	Class M_login extends CI_Model{
		
	function index()
	{
			return;
	}
	
	function getAkun($username,$password){
		$this->db->select('*');
		$this->db->from('tbl_pengguna');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get()->result_array();
	}
	
	function getGaleriFooter(){
		$this->db->select('*');
		$this->db->from('tbl_galeri');
		$this->db->limit('2');
		$this->db->order_by("id_galeri", "desc");
		return $this->db->get()->result_array();
	}
	
	function getStrukturOrganisasiFooter(){
		$this->db->select('*');
		$this->db->from('tbl_strukturorganisasi');
		$this->db->limit('1');
		return $this->db->get()->result_array();
	}
	
	function getArtikelFooter(){
		$this->db->select('*');
		$this->db->from('tbl_artikel');
		$this->db->limit('3');
		$this->db->order_by("id_artikel", "desc");
		return $this->db->get()->result_array();
	}
	
	}
?>