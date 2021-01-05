<?php

class Model_pegawai extends CI_Model
{
	public  function get()
	{
		return  $this->db->get('pegawai');
	}
	public function getById($nip)
	{
		return $this->db->get_where('pegawai', array('NIP' => $nip))->row();
	}
	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function inputpegawai($data, $table)
	{
		$query = $this->db->insert($table, $data);
		return $query;
	}
	public function get_pegawai($pegawai)
	{
		$this->db->select('*');
		$this->db->from('pegawai');
		$this->db->like('NAMA', $pegawai);
		$this->db->or_like('NIP', $pegawai);
		$this->db->or_like('Jabatan', $pegawai);
		return $this->db->get()->result();
	}

	//function ambil_data($tabel){

	//return $this->db->get($tabel);
	//}

	public function detail_data($NIP = NULL)
	{
		$query = $this->db->get_where('jadwal', array('NIP' => $NIP))->row();
		return $query;
	}
}
