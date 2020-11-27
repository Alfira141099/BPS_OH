<?php 

class Data_kasi extends CI_Controller{

    public function index()
    {
        $data['Jadwal'] = $this->Model_kasi->tampil_data()->result();
        $this->load->view('view_kasi', $data);
    }
    public function update(){
        $id=$this->input->post('id');
        $Nama = $this->input->post('Nama');
        $NIP = $this->input->post('NIP');
        $Tanggal = $this->input->post('Tanggal');
        $Kegiatan = $this->input->post('Kegiatan');
        $Seksi = $this->input->post('Seksi');

        $data = array(
            'Nama' => $Nama,
            'NIP' => $NIP,
            'Tanggal' => $Tanggal,
            'Kegiatan' => $Kegiatan,
            'Seksi' => $Seksi
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