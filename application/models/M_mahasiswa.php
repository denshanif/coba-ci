<?php

class M_mahasiswa extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getMahasiswa()
  {
    $sql = "SELECT * FROM mahasiswa";
    $query = $this->db->query($sql);

    return $query->result();
  }

  public function insert_mhs($data)
  {
    $sql = "INSERT INTO mahasiswa (npm, nama, prodi, angkatan) VALUES (?,?,?,?)";

    $this->db->query($sql, array($data['npm'], $data['nama'], $data['prodi'], $data['angkatan']));
  }
}