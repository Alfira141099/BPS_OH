<?php 
 
class Model_login extends CI_Model{	

	public function login($username,$password){
		$this->db->select('*');
		$this->db->from('pegawai');
		$this->db->where(array('username' => $username,
								'password' => $password));
		$this->db->order_by('NIP', 'desc');
		$query = $this->db->get();
		return $query->row();
	}
}