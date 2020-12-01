<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_pegawai extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('Minput_pegawai');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['pegawai'] = $this->Minput_pegawai->tampil_data()->result();
		$this->load->view('Vinput_pegawai',$data);
	}
 
	function tambah(){
		$this->load->view('Vinput_pegawai');
	}
 
	function tambah_aksi(){
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