<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bps_oh extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_pegawai');
    }

	public function index()
	{
	//	$data['pegawai'] = $this->Model_pegawai->get()->result();
		$this->load->view('Bps_Oh');
	}

	public function input()
	{
		$this->load->view('input_kasi');
	}

	function pegawai()
	{
		$data['pegawai']= $this->Model_pegawai->ambil_data('pegawai')->result();
		$this->load->view('pegawai',$data);
	}


	} ?>