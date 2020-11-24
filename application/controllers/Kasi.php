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
		$nama		= $this->input->post('nama');
		$NIP		= $this->input->post('nip');
		$seksi		= $this->input->post('seksi');
		$tanggal	= $this->input->post('tanggal');
		$kegiatan	= $this->input->post('kegiatan');

		$data = array(
			'nama'		=> $nama,
			'NIP'		=> $nip,
			'seksi'		=> $seksi,
			'tanggal'	=> $tanggal,
			'kegiatan'	=> $kegiatan,
		);

		$this->Input_jadwal->inputseksi($data, 'jadwal');
		redirect('Kasi/Input_kasi');
	}

	}