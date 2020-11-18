<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bps_oh extends CI_Controller {
	public function index()
	{
		$this->load->view('Bps_Oh');
	}

	public function input()
	{
		$this->load->view('input_kasi');
	}

	}