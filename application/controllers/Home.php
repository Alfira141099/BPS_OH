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
		$this->load->view('Home');
	}

	public function input()
	{
		$this->load->view('input_kasi');
	}

	}