<?php 
 
class Minput_pegawai extends CI_Model{
	function tampil_data(){
		return $this->db->get('pegawai');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}