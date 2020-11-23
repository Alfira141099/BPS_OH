<?php 
 
class Model_kasi extends CI_Model{

    public function getAllJadwal()
    {
        return $this->db->get('Jadwal')->result_array();
    }
    public function JadwalByid($where){
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('id_barang', $where);
        $result =$this->db->get();
        return $result->result();
    }
}