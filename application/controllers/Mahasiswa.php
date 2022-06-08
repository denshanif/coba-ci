<?php

class Mahasiswa extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_mahasiswa');
  }

  public function index()
  {
    $data['mhs'] = $this->M_mahasiswa->getMahasiswa();
    $data['judul'] = 'Data Mahasiswa';
    //print_r($data['mhs']);
    $this->load->view('mahasiswa/v_mahasiswa', $data);
  }

  public function create()
  {
    if ($this->input->post())
    {
      $data_mhs = $this->input->post();
      $this->M_mahasiswa->insert_mhs($data_mhs);
      redirect('mahasiswa');
    }
    else{
      $data['judul'] = "Tambah Mahasiswa Baru";
      $this->load->view('mahasiswa/v_create', $data);
    }
  }
}