<?php 
 
class Jadwal_model extends CI_Model{

    private $_table = "Jadwal";

    public $id;
    public $Nama;
    public $NIP;
    public $Tanggal;
    public $Keteranggan;

    public function rules()
    {
        return [
            ['field' => 'Tanggal',
            'label' => 'Tanggal',
            'rules' => 'required'],

            ['field' => 'Sesi',
            'label' => 'Sesi',
            'rules' => 'required'],

            ['field' => 'Keterangan',
            'label' => 'Keterangan',
            'rules' => 'required'],
        ];
    }
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}