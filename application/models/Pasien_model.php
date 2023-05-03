<?php

class Pasien_model extends CI_Model
{
  // var $table = 'tb_pasien';

  public function get_data()
  {
    $query = $this->db->query('SELECT * FROM tb_pasien');
    $result =  $query->result_array();
    return $result;
  }
  //   public function insert_data($data, $table)
  //   { //$data table menerima parameter
  //    $this->db->insert($table, $data); 
  // }

  public function insert_data($data, $table)
  {
    $table = 'tb_pasien';
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
