<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasi extends CI_Controller {
	public function index()
	{
		$this->load->view('input_kasi');
	}

	}