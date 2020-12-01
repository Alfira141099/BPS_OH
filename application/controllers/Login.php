<?php
class Login extends CI_Controller{
	//fungsi di dalam class yang di eksekusi pertama kali saat class itu dipanggil
	public function index(){
		//validasi input untuk login
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		//check input
		$this->form_validation->set_rules('username', 'Username', 'required', 
				array('required' => '%s harus diisi'));
		$this->form_validation->set_rules('password', 'Password', 'required', 
				array('required' => '%s harus diisi'));

		//proses ke library My_login
		if($this->form_validation->run()){
			$this->my_login->login($username,$password);
		}

        $data = array('title' => 'Halaman Login',
    				  'content' => 'BPS_OH/Login');
		$this->load->view('View_login',$data, FALSE);
	}
	public function logout(){
		$this->my_login->logout();
	}

}


