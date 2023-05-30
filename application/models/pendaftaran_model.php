<?php

class pendaftaran_model extends CI_Model
{

  public function get_data()
  {
    $this->db->select('a.no_rm, b.no_rg, a.nama_pasien, b.dokter_id, a.alamat, b.periksa_tgl');
    $this->db->from('tb_pasien AS a');
    $this->db->join('tb_kunjungan AS b', 'a.id_pasien = b.pasien_id');
    $query = $this->db->get();

    return $query->result_array();

  }


}
