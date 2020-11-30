<?php
class Input_jadwal extends CI_Model{
	public function Kasi(){
	}

	public function getJadwal(){
		$query = $this->db->query("SELECT * FROM seksi ORDER BY seksi ASC");

            return $query->result();

	}

	//INPUT

	function inputjadwal($data, $table){
		$this->db->insert($table, $data);
		
	}

	function inputseksi($data, $table){
		$query = $this->db->insert($table, $data);
		return $query;
	}

	public function get_where($where){
        return $this->db->get_where('jadwal',$where);
    }


}
