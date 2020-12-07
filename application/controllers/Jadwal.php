<?php
class Jadwal extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Jadwal_model');
        $this->load->model('Model_pegawai');
        //proteksi halaman dengan library my_login
        $this->my_login->check_login();
    }

    public function index()
    {
        $index= $this->Model_pegawai->get();
        $data['jadwal'] = $this->Jadwal_model->tampil_data()->result();
        $this->load->view('View_jadwal', $data);
    }

     //READ JADWAL TIAP-TIAP PEGAWAI 
    public function detailjadwal($NIP){
    //  $data->pegawai = $this->Model_pegawai->getdetailjadwal($NIP)->row_array();
        $this->load->model('Model_pegawai');
        $detailjadwal = $this->Model_pegawai->detail_data($NIP);
        $this->load->model('Jadwal_model');
        $data['jadwal'] = $detailjadwal;
        $this->load->view('View_jadwal',$data);
    }

}