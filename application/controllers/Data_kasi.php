<?php 

class Data_kasi extends CI_Controller{

    public function __construct(){
        parent::__construct();
        //proteksi halaman dengan library my_login
        $this->my_login->check_login();
    }

    public function index()
    {
        $this->load->model('Model_kasi');
        $data['Jadwal'] = $this->Model_kasi->tampil_data()->result();
        $this->load->view('view_kasi', $data);
    }
    public function update(){
        $id         = $this->input->post('id');
        $TANGGAL    = $this->input->post('Tanggal');
        $KEGIATAN   = $this->input->post('Kegiatan');
        $SEKSI      = $this->input->post('Seksi');

        $data = array(
            'Tanggal'   => $TANGGAL,
            'Kegiatan'  => $KEGIATAN,
            'Seksi'     => $SEKSI
        );

        $where = array(
            'id' => $id
        );
        $this->load->model('Model_kasi');
        $this->load->model('Model_seksi');
        $this->Model_kasi->update_data($where, $data, 'Jadwal');
        redirect('Data_Kasi/index');
    }
    public function hapus($id){
        $this->load->model('Model_kasi');
        $this->load->model('Model_seksi');
        $where = array('id'=>$id);
        $this->Model_kasi->hapus_data($where, 'Jadwal');
        redirect('Data_kasi/index');
    }
    public function edit($id){
        $this->load->model('Model_kasi');
        $this->load->model('Model_seksi');
        $where = array('id'=>$id);
        $data['Seksi'] = $this->Model_seksi->get()->result();
        $data['Jadwal'] = $this->Model_kasi->edit_data($where,'jadwal')->row();
        $this->load->View('edit', $data);
    }
}