<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Input_jadwal');
		$this->load->model('Jadwal_model');
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
		$NIP		= $this->input->post('NIP');
	//	$NIP		= $this->input->post('nip');
		$SEKSI		= $this->input->post('seksi');
		$TANGGAL	= $this->input->post('tanggal');
		$KEGIATAN	= $this->input->post('kegiatan');

		$data = array(
	//		'nama'		=> $NAMA,
			'NIP'		=> $NIP,
			'seksi'		=> $SEKSI,
			'tanggal'	=> $TANGGAL,
			'kegiatan'	=> $KEGIATAN
		);
		($cek_data = $this->Jadwal_model->get_where([
			'NIP' => $NIP,
			'TANGGAL' => $TANGGAL 			
		])->result()) ? $rule_tgl = 'required|is_unique[jadwal.TANGGAL]' : $rule_tgl = 'required' ;
		// var_dump($rule_tgl);die;
		// $where = array(
        //     'id' => $id
		// );
		
		$this->form_validation->set_rules('seksi', 'Seksi', 'required',
			['required' => '%s harap dipilih']
		);
		$this->form_validation->set_rules('NIP', 'Nama Pegawai', 'required',
			['required' => '%s harap dipilih']
		);
		$this->form_validation->set_rules('tanggal', 'Tanggal', $rule_tgl,
			[
				'required' => '%s harap ditentukan',
				'is_unique' => '%s sudah terpilih silahkan pilih tanggal yang lain' 
			]
		);
		$this->form_validation->set_rules('kegiatan', 'Kegiatan', 'required',
			['required' => '%s harap diisi']
		);
		if ($this->form_validation->run() == FALSE)
		{
			$data['Pegawai'] = $this->Model_pegawai->get()->result();
			$data['dataseksi'] = $this->Input_jadwal->getjadwal();
			$this->load->view('input_kasi',$data);
		}
		else
		{
			$this->Input_jadwal->inputseksi($data, 'jadwal');
			$this->session->set_flashdata('message','Jadwal berhasil ditambahkan!!!');
			redirect('Kasi');
		}
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