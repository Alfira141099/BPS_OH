<?php 
 
class Model_pegawai extends CI_Model{
    public  function get()
    {
        return  $this->db->get('pegawai');
    }
}