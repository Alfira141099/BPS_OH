<?php
class Jadwal extends CI_Controller{

    public function __construct(){
        parent::__construct();
        //proteksi halaman dengan library my_login
        $this->my_login->check_login();
    }

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Jadwal_model');
    }

    public function index()
    {
        $data['Jadwal'] = $this->Jadwal_model->tampil_data()->result();
        $this->load->view('View_jadwal', $data);
    }

}