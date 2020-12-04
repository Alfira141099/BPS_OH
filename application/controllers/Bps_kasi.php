<?php
class Bps_kasi extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_pegawai');
        $this->load->model('Model_kasi');

    }

    public function index()
    {
        $data['pegawai'] = $this->Model_pegawai->get()->result();
        $this->load->view('Home_kasi', $data);
    }

    public function jadwal()
    {
        $data['jadwal'] = $this->Model_kasi->get()->result();
        $this->load->view('view_kasi', $data);
    }


}