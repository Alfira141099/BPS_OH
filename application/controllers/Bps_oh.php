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

    //READ JADWAL TIAP-TIAP PEGAWAI 
	public function detailjadwal($NIP){
	//	$data->pegawai = $this->Model_pegawai->getdetailjadwal($NIP)->row_array();
        $this->load->model('Model_pegawai');
        $detailjadwal = $this->Model_pegawai->detail_data($NIP);
        $this->load->model('Jadwal_model');
        $data['jadwal'] = $detailjadwal;
        $this->load->view('detailjadwal_view',$data);
	}

}