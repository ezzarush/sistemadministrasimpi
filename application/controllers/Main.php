<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['dataGaleri'] = $this->m_login->getGaleriFooter();
		$data['dataStrukturOrganisasi'] = $this->m_login->getStrukturOrganisasiFooter();
		$data['dataArtikel'] = $this->m_login->getArtikelFooter();
		$this->load->view('theme/index',$data);
	}
	
	function kodok(){
		//$this->load->library('database');
		//$this->load->model('M_pengguna');
		
		$this->db->select('*');
		$this->db->from('tbl_master_pengguna');
		$this->db->order_by('id_master_pengguna','DESC');
		$this->db->limit(1);
		$query=$this->db->get()->result_array();
		echo $query[0]['id_master_pengguna'];
	}
	
	function daftarBaru(){
		$nama_lengkap = $_POST['nama_lengkap'];
		$nip_nik = $_POST['nip_nik'];
		$alamat = $_POST['alamat'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$dataMasterPengguna = array(
			'nama_lengkap'	=> $nama_lengkap,
			'nip'	=> $nip_nik,
			'alamat'	=> $alamat,
			'email'	=> $email
		);
		
		$this->db->insert('tbl_master_pengguna',$dataMasterPengguna);
		
		$this->db->select('*');
		$this->db->from('tbl_master_pengguna');
		$this->db->order_by('id_master_pengguna','DESC');
		$this->db->limit(1);
		$query=$this->db->get()->result_array();
		
		$dataPengguna = array(
			'id_master_pengguna' => $query[0]['id_master_pengguna'],
			'username' => $username,
			'password' => $password,
			'hak_akses' => 'user',
			'status_aktif' => '0'
		);
		
		
		$this->db->insert('tbl_pengguna',$dataPengguna);
		
		$this->session->set_flashdata('statusDaftar','berhasil');
		
		redirect(base_url());
	}
	
}
