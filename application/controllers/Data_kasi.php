<?php 

class Data_kasi extends CI_Controller{

   public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_kasi');
        $this->load->model('Model_pegawai');
        $this->load->model('Jadwal_model');
        //proteksi halaman dengan library my_login
        $this->my_login->check_login();
    }

    public function index($NIP = false)
    {
        $index = $this->Model_pegawai->get();
        $data['jadwal'] = $this->Model_kasi->tampil_data($NIP)->result_array();
        if(!$data['jadwal'] || !$NIP){
            $this->session->set_flashdata('message','Jadwal tidak tersedia!!!');
            redirect('Bps_kasi');
        }
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
        $nip = $this->Jadwal_model->get_where($where)->row_array()['NIP'];
        $this->load->model('Model_kasi');
        $this->load->model('Model_seksi');
        $this->Model_kasi->update_data($where, $data, 'Jadwal');
        $this->session->set_flashdata('success','Jadwal berhasil diedit!!!');
        redirect('Data_kasi/index/'.$nip);
    }
    public function hapus($id){
        // $this->load->model('Model_kasi');
        // $this->load->model('Model_seksi');
        $where = array('id'=>$id);
        $nip = $this->Jadwal_model->get_where($where)->row_array()['NIP'];
        $this->Model_kasi->hapus_data($where, 'jadwal');
        $this->session->set_flashdata('success','Jadwal berhasil dihapus!!!');
        redirect('Data_kasi/index/'.$nip);
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