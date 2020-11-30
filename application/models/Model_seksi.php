<?php 
 
class Model_seksi extends CI_Model{
    public  function get()
    {
        return  $this->db->get('seksi');
    }
}