<?php
class Jadwal extends CI_Controller{
	//fungsi di dalam class yang di eksekusi pertama kali saat class itu dipanggil
	function __construct(){ 
		/*Jika menggunakan construct di controller, parent::__constructor diperlukan 
		karena konstruktor lokal Anda akan menimpa yang ada di kelas induk kontrol sehingga kami perlu menyebutnya secara manual*/
		parent::__construct();
		//load file mahasiswa_model di construct agar seluruh function di dalam controller dapat mengakses model yang di load
		$this->load->model('Jadwal_model');
		
	}
	public function index()
	{
		$data['jadwal'] = $this->Jadwal_model->getAll();
		$this->load->view('View_jadwal',$data);
	}

}