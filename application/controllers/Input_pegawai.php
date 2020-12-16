<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_pegawai extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('Minput_pegawai');
		$this->load->helper('url');
		$this->load->library('form_validation');
 
	}
 
	function index(){
		$data['pegawai'] = $this->Minput_pegawai->tampil_data()->result();
		$this->load->view('Vinput_pegawai',$data);
	}
 
	function tambah(){
		$this->load->view('Vinput_pegawai');
	}
 
	function tambah_aksi(){
		$this->form_validation->set_rules('Nama', 'Nama', 'required', 
				array('required' 		=> '%s harus diisi'));
		$this->form_validation->set_rules('NIP','NIP', 'required|max_length[20]',
				array('required' 		=> '%s harus diisi',
					  'max_length[20]' 	=> '%s tidak boleh lebih dari 20 karakter'));
		$this->form_validation->set_rules('Jabatan', 'Jabatan', 'required',
				array('required'		=> '%s harus diisi'));


		if($this->form_validation->run()==false){
			$this->load->view('Vinput_pegawai');
			// redirect(base_url('Vinput_pegawai'));
		}else{
		$NAMA = $this->input->post('Nama');
        $NIP = $this->input->post('NIP');
        $Jabatan = $this->input->post('Jabatan');

			$data = array(
			'Nama' => $NAMA,
            'NIP' => $NIP,
            'Jabatan' => $Jabatan,
			);
		$this->Minput_pegawai->input_data($data,'pegawai');
		redirect('Pegawai/index');
	}
	}
 
}