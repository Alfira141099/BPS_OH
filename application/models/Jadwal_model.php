<?php 
 
class Jadwal_model extends CI_Model{
    
    public  function tampil_data()
    {
        return  $this->db->get('Jadwal');
    }

  //  public function get_where($where){
  //      return $this->db->get_where('jadwal',$where);
  //  }

//    function getdetailjadwal($NIP){
//		$this->db->select('*');
//		$this->db->from('jadwal');
//		$this->db->where('NIP',$NIP);
//		$query = $this->db->get();
//			return $query;
//	}

    public function detail_data($NIP = NULL){
      $query = $this->db->get_where('jadwal', array('NIP' => $NIP))->row();
      return $query;
    }
}