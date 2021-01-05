<?php
class Bps_kasi extends CI_Controller{
	public function __construct()
    {
		parent::__construct();
		$this->my_login->check_login();
        $this->load->model('Model_pegawai');
        $this->load->model('Model_kasi');
        //proteksi halaman dengan library my_login
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
    public function search(){
        $pegawai= $this->input->post('pegawai');
        $data['pegawai']=$this->Model_pegawai->get_pegawai($pegawai);
        $this->load->view('Home_kasi', $data);
    }


}
