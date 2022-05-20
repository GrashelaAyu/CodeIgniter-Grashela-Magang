<?php
class mahasiswa_model extends CI_Model{
    public function tampil_data($table)
    {
        return $this->db->get($table);

    }
    public function tambah_data($data,$table)
    {
        $this->db->insert($table,$data);
    }
    public function edit_data($where,$table)
    {
     return $this->db->get_where($table,$where);
    }
    public function edit_aksi($where,$data,$table)
    {
    $this->db->where($where);
    $this->db->where($table,$data);
    }
}
?>