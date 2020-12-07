<?php 
 
class Model_login extends CI_Model{	

	public function login($username,$password){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where(array('username' => $username,
								'password' => $password));
		$this->db->order_by('id_user', 'desc');
		$query = $this->db->get();
		return $query->row();
	}
}