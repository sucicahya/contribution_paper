<?php
Class M_grafik extends CI_Model
{
  function Jum_mahasiswa_perjurusan()
    {
        $this->db->group_by('jenis_surat');
        $this->db->select('jenis_surat');
        $this->db->select("count(*) as total");
        return $this->db->from('data_surat')
          ->get()
          ->result();
    }
}
?>