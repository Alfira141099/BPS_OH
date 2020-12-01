<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//proteksi halaman dengan library my_login
		$this->my_login->check_login();
	}

	public function index()
	{
		$data = array('title' => 'Home Penjadwalan Dinas');
		$this->load->view('Home', $data, FALSE);
	}

	public function input()
	{
		$this->load->view('input_kasi');
	}

	}