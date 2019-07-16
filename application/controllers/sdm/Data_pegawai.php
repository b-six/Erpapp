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
    $this->load->view('sdm/hrd/data_pegawai_v', $data);
  }

  function save_pegawai()
  {
    $id_pegawai = $this->input->post('id_pegawai');
    $nama_pegawai = $this->input->post('nama_pegawai');
    $tipe_pegawai = $this->input->post('tipe_pegawai');
    $wilayah = $this->input->post('wilayah');
    $this->pegawai_model->save_pegawai($id_pegawai, $nama_pegawai, $tipe_pegawai, $wilayah);
    redirect('sdm/data_pegawai');
  }

}


/* End of file Data_pegawai.php */
/* Location: ./application/controllers/Data_pegawai.php */