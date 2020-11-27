<?php 

class Data_kasi extends CI_Controller{

    public function index()
    {
        $data['Jadwal'] = $this->Model_kasi->tampil_data()->result();
        $this->load->view('view_kasi', $data);
    }
    public function update(){
        $id=$this->input->post('id');
        $NAMA = $this->input->post('Nama');
        $NIP = $this->input->post('NIP');
        $TANGGAL = $this->input->post('Tanggal');
        $KEGIATAN = $this->input->post('Kegiatan');
        $SEKSI = $this->input->post('Seksi');

        $data = array(
            'Nama' => $NAMA,
            'NIP' => $NIP,
            'Tanggal' => $TANGGAL,
            'Kegiatan' => $KEGIATAN,
            'Seksi' => $SEKSI
        );

        $where = array(
            'id' => $id
        );

        $this->Model_kasi->update_data($where, $data, 'Jadwal');
        redirect('Data_Kasi/index');
    }
    public function hapus($id){
        $where = array('id'=>$id);
        $this->Model_kasi->hapus_data($where, 'Jadwal');
        redirect('Data_kasi/index');
    }
    public function edit($id){
        $where = array('id'=>$id);
        $data['Jadwal'] = $this->Model_kasi->edit_data($where,'Jadwal')->result();
        $this->load->View('edit', $data);
    }
}