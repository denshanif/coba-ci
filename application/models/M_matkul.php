<?php

class M_Matkul extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getMatkul($kode_mk = null)
  {
    if ($kode_mk)
    {
      return $this->db->get_where('tbl_matakuliah', array('kode_mk'=>$kode_mk))->result();
    }
    else return $this->db->get('tbl_matakuliah')->result();
  }

  public function insert_matkul($data)
  {
    $sql = "INSERT INTO tbl_matakuliah (kode_mk, nama, sks, semester, jenis) VALUES (?,?,?,?,?)";

    $this->db->query($sql, array($data['kode_mk'], $data['nama'], $data['sks'], $data['semester'], $data['jenis']));
    return $this->db->affected_rows();
  }

  public function update($data)
  {
    $sql = "UPDATE tbl_matakuliah SET
          nama = ?,
          sks = ?,
          semester = ?,
          jenis = ?
          WHERE kode_mk = ?";

    $this->db->query($sql, array($data['nama'], $data['sks'], $data['semester'], $data['jenis'], $data['kode_mk']));
    return $this->db->affected_rows();
  }

  public function delete($kode_mk)
  {
    $this->db->where('kode_mk', $kode_mk);
    $this->db->delete('tbl_matakuliah');
    return $this->db->affected_rows();
  }
}