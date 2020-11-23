<?php 
 
class Jadwal_model extends CI_Model{

    public function getAllJadwal()
    {
        return $this->db->get('Jadwal')->result_array();
    }
}