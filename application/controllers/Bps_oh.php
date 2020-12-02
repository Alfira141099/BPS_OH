<?php
class Bps_oh extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_pegawai');
    }

    public function index()
    {
        $data['pegawai'] = $this->Model_pegawai->get()->result();
        $this->load->view('Bps_oh', $data);
    }
    //public function hapus($NIP){
        //$this->load->model('Model_pegawai');
        //$where = array('NIP'=>$NIP);
        //$this->Model_pegawai->hapus_data($where, 'pegawai');
        //redirect('Pegawai/index');
    //}

}