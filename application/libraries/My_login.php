<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_login{
	protected $CI;

	public function __construct(){
		$this->CI =& get_instance();
		$this->CI->load->model('Model_login');
	}
	public function login($username,$password){
		$check = $this->CI->Model_login->login($username,$password);
		if($check){
			$id_user = $check->id_user;
			$username = $check->username;
			$password = $check->password;
			$level = $check->level;

			//proses create session untuk login
			$this->CI->session->set_userdata('id_user',$id_user);
			$this->CI->session->set_userdata('username',$username);
			$this->CI->session->set_userdata('password',$password);
			$this->CI->session->set_userdata('level',$level);

			//End Proses create session untuk login 
			//redirect ke halaman home
			redirect(base_url('Bps_kasi'));
		}else{
			$this->CI->session->set_flashdata('warning', 'Username atau Password salah');
			redirect(base_url('Login'));
		}
	}
	public function check_login($status = false){
		// var_dump($this->CI->session->userdata('username'));die;
		//cek status login username, jika tidak ada atau kosong, maka redirect ke login
		if ($status) {
			if($this->CI->session->userdata('username')){
				redirect(base_url('bps_kasi'));
			}
		}else{
			if(!$this->CI->session->userdata('username')){
				//kalau username kosong, suruh login lagi
				$this->CI->session->set_flashdata('warning', 'Anda belum login');
				redirect(base_url('Login'));
			}
		}
	}
	public function logout(){
		//proses unset session
		$this->CI->session->unset_userdata('id');
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('password');
		$this->CI->session->unset_userdata('level');

		//END proses UNSET session untuk login
		//Redirect ke halaman Dashboard
		$this->CI->session->set_flashdata('sukses', 'Anda berhasil logout');
		redirect(base_url('Login'));
	}
}
