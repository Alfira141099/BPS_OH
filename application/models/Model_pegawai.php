<?php 
 
class Model_pegawai extends CI_Model{
    public  function get()
    {
        return  $this->db->get('pegawai');
    }
    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    function inputpegawai($data, $table){
		$query = $this->db->insert($table, $data);
		return $query;
	}

	function ambil_data($tabel){

        return $this->db->get($tabel);
    }
}