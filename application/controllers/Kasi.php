<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Input_jadwal');
	//	$this->load->model('Jadwal_model');
		$this->load->model('Model_pegawai');
		//proteksi halaman dengan library my_login
        $this->my_login->check_login();
	}

	public function index()
	{
		$data['Pegawai'] = $this->Model_pegawai->get()->result();
		$data['dataseksi'] = $this->Input_jadwal->getjadwal();
		$this->load->view('input_kasi',$data);
	}

	Public function tambah_aksi(){
		$id         = $this->input->post('id');
		$NAMA		= $this->input->post('NIP');
	//	$NIP		= $this->input->post('nip');
		$SEKSI		= $this->input->post('seksi');
		$TANGGAL	= $this->input->post('tanggal');
		$KEGIATAN	= $this->input->post('kegiatan');

		$data = array(
	//		'nama'		=> $NAMA,
			'NIP'		=> $NAMA,
			'seksi'		=> $SEKSI,
			'tanggal'	=> $TANGGAL,
			'kegiatan'	=> $KEGIATAN
		);

		$where = array(
            'id' => $id
        );
		$this->Input_jadwal->inputseksi($data, 'jadwal');
		redirect('Data_kasi');
	}
	
	public function getDateAjax(){
		$nip = $this->input->post('nip');
		$date = $this->Jadwal_model->get_where(['NIP' => $nip])->result();
		$datedisable = [];
		foreach($date as $a){
			array_push($datedisable, date('d-m-Y', strtotime($a->TANGGAL)));
		}
		echo json_encode($datedisable);
	}

}