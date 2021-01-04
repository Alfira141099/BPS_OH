<?php 
 
class Jadwal_model extends CI_Model{

  public function getAllJadwal()
  {
    //$this->db->order_by('NIP', 'ASC');
    return $this->db->from('jadwal')
      ->join('pegawai', 'pegawai.NIP=jadwal.NIP')
      ->get_where()
      ->result();
  }
  public function get_where($where){
    return $this->db->get_where('jadwal',$where);
  }
  public function hapus_data($where, $tabel){
    $this->db->where($where);
    $this->db->delete($tabel);
  }
  public function edit_data($where, $table){
      return $this->db->join('pegawai', 'pegawai.NIP = jadwal.NIP')
          ->get_where($table, $where);
  }
  public function update_data($where, $data, $table){
      $this->db->where($where);
      $this->db->update($table, $data);
  }
}