<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}
	
	public function index()
	{
		//$this->load->view('theme/index');
	}
	
	function login_proses(){
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$dataPengguna = $this->m_login->getAkun($username,$password);
		
		if(empty($dataPengguna)){
			//gagal login
			$this->session->set_flashdata('statusLogin','gagal');
		}else{
			if($dataPengguna[0]['status_aktif']=='0'){
				$this->session->set_flashdata('statusLogin','gagalAktif');
			}else{
				$this->session->set_flashdata('statusLogin','berhasil');
				$this->session->set_userdata('isLogin','true');
				$this->session->set_userdata('idPengguna',$dataPengguna[0]['id_pengguna']);
				$this->session->set_userdata('namaPengguna',$dataPengguna[0]['username']);
				$this->session->set_userdata('hakAkses',$dataPengguna[0]['hak_akses']);
			}
		}
		
		redirect(base_url());
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
