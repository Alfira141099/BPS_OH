<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Input_jadwal');
	}

	public function index()
	{
		$data['dataseksi'] = $this->Input_jadwal->getjadwal();
		$this->load->view('input_kasi',$data);
	}

	Public function tambah_aksi(){
		$id         = $this->input->post('id');
		$NAMA		= $this->input->post('nama');
		$NIP		= $this->input->post('nip');
		$SEKSI		= $this->input->post('seksi');
		$TANGGAL	= $this->input->post('tanggal');
		$KEGIATAN	= $this->input->post('kegiatan');

		$data = array(
			'nama'		=> $NAMA,
			'nip'		=> $NIP,
			'seksi'		=> $SEKSI,
			'tanggal'	=> $TANGGAL,
			'kegiatan'	=> $KEGIATAN
		);

		$where = array(
            'id' => $id
        );

		$this->Input_jadwal->inputseksi($data, 'jadwal');
		redirect('Jadwal');
	}

	}