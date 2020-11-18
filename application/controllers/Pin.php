<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pin extends CI_Controller {

function __construct(){
		parent::__construct();		
		$this->load->model('m_pin');
 }

public function index()
	{
		$this->load->view('View_Pin');
	}

}