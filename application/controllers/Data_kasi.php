<?php
class Data_kasi extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_kasi');
    }

    public function index()
    {
        $data['Jadwal'] = $this->Model_kasi->getAllJadwal();
        $this->load->view('View_Kasi', $data);
    }
    //public function tambahJadwal(){
        //$Nama = $this->input->post('Nama');
        //$NIP = $this->input->post('NIP');
        //$Tanggal = $this->input->post('Tanggal');
        //$Seksi = $this->input->post('Seksi');
        //$Keterangan = $this->input->post('Keterangan');

        //$data = array(
            //'Nama' => $Nama,
            //'NIP' => $NIP,
            //'Tanggal' => $Tanggal,
            //'Seksi' => $Seksi,
            //'Keterangan' => $Keterangan,
        //);
        //$this->Model_kasi->input('barang', $data);
        //$this->index();
    //}
    public function formEDIT($id_barang){
        $data['data'] = $this->Model_kasi->barangById($id_barang);
        $this->load->view('formEdit', $data);
    }
    public function hapus($id){
        $this->Model_kasi->hapus($id);
        $this->index();
    }

}
?>