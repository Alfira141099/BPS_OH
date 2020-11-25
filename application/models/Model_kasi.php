<?php 
 
class Model_kasi extends CI_Model{
    
    public  function getAllJadwal()
    {
        return $this->db->get('Jadwal')->result_array();
    }
    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}