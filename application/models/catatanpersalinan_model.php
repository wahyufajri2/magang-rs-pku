<?php

class catatanpersalinan_model extends CI_Model
{
  // var $table = 'tb_pasien';

  public function get_data()
  {
    $this->db->select('a.no_rm, b.no_rg, b.status, a.nama_pasien, a.alamat');
    $this->db->from('tb_pasien AS a');
    $this->db->join('tb_kunjungan AS b', 'a.id_pasien = b.pasien_id');
    $query = $this->db->get();

    return $query->result_array();

  }
 

  public function insert_data($data, $table)
  {
    $table = 'tb_kunjungan';
    $this->db->insert($table, $data);
  }


public function update_data($data, $table)
{
  $this->db->where('id_pasien', $data['id_pasien']);
  $this->db->update($table, $data);
 }

 
public function delete($where, $table)
{
  $this->db->where($where);
  $this->db->delete($table);
 }


}
