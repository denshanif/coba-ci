<?php

class Matkul extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_matkul');
    $this->load->helper('matkul');
  }

  public function index()
  {
    $data['matkul'] = $this->M_matkul->getMatkul();
    $data['judul'] = 'Data Mata Kuliah';
    $this->load->view('matkul/v_matkul', $data);
  }

  public function create()
  {
    if ($this->input->post())
    {
      $data_matkul = $this->input->post();
      $status = $this->M_matkul->insert_matkul($data_matkul);
      if($status > 0)
      {
        $this->session->set_flashdata('msg',berhasil("Data Mata Kuliah Berhasil disimpan"));
      }
      else
      {
        $this->session->set_flashdata('msg',gagal("Data Mata Kuliah Gagal disimpan"));
      }
      redirect(base_url().'index.php/Matkul/index');
    }
    else{
      $data['judul'] = "Tambah Mata Kuliah Baru";
      $this->load->view('matkul/v_create', $data);
    }
  }

  public function update($kode_mk = null)
  {
    if ($this->input->post())
    {
			$data = $this->input->post();
			$status = $this->M_matkul->update($data);
      if($status > 0)
      {
        $this->session->set_flashdata('msg',berhasil("Data Mata Kuliah Berhasil diupdate"));
      }
      else
      {
        $this->session->set_flashdata('msg',gagal("Data Mata Kuliah Gagal diupdate"));
      }
			redirect(base_url().'index.php/Matkul/index');

		}
		else{
			$data['matkul'] = $this->M_matkul->getMatkul($kode_mk);
			$data['judul'] = 'Edit Data Mata Kuliah';
			$this->load->view('matkul/v_update', $data);
		}
  }

  public function delete($kode_mk)
  {
    $status = $this->M_matkul->delete($kode_mk);
    if($status > 0)
      {
        $this->session->set_flashdata('msg',berhasil("Data Mata Kuliah Berhasil dihapus"));
      }
      else
      {
        $this->session->set_flashdata('msg',gagal("Data Mata Kuliah Gagal dihapus"));
      }
    redirect(base_url().'index.php/Matkul/index');
  }
}