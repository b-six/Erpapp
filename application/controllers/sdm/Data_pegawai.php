<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_pegawai extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('sdm/pegawai_model');
  }

  public function index()
  {

    $data['pegawai'] = $this->pegawai_model->get_pegawai();
    // print_r ($data);
    $this->load->view('sdm/hrd/data_pegawai_v', $data);
  }

  function save_pegawai()
  {
    $id_pegawai = $this->input->post('id_pegawai');
    $nama_pegawai = $this->input->post('nama_pegawai');
    $golongan = $this->input->post('id_golongan');
    $id_pendidikan = $this->input->post('id_pendidikan');
    $umur = $this->input->post('umur');
    $alamat = $this->input->post('alamat');
    $email = $this->input->post('email');
    $tgl_diterima = $this->input->post('tgl_diterima');
    $rekening = $this->input->post('rekening_pegawai');
    $this->pegawai_model->save_pegawai($id_pegawai, $nama_pegawai, $golongan, $id_pendidikan, $umur, $alamat, $email, $tgl_diterima, $rekening);
    redirect('sdm/data_pegawai');
  }

}


/* End of file Data_pegawai.php */
/* Location: ./application/controllers/Data_pegawai.php */