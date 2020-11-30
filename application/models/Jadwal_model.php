<?php 
 
class Jadwal_model extends CI_Model{
    
    public  function tampil_data()
    {
        return  $this->db->get('Jadwal');
    }

  //  public function get_where($where){
  //      return $this->db->get_where('jadwal',$where);
  //  }
}