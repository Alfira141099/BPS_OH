<?php 
 
class Model_kasi extends CI_Model{
    
    public  function tampil_data($NIP)
    {
      //return  $this->db->get('jadwal');
      $this->db->select('*');
      $this->db->from('jadwal');
      $this->db->where('NIP',$NIP);
      $query = $this->db->get();
      return $query;
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