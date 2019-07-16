<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_customer extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('marketing/customer_model');
  }

  public function index()
  {
    $data['customer'] = $this->customer_model->get_customer();
    $this->load->view('marketing/data_customer_v', $data);
  }

  function save_customer()
  {
    $id_pegawai = $this->input->post('id_pegawai');
    $nama_pegawai = $this->input->post('nama_pegawai');
    $gabung = $this->input->post('gabung');
    $berhenti = $this->input->post('berhenti');
    $stts = $this->input->post('status');
    $this->customer_model->save_customer($id_pegawai, $nama_pegawai, $gabung, $berhenti, $stts);
    redirect('marketing/data_customer');
  }

}


/* End of file Data_customer.php */
/* Location: ./application/controllers/Data_customer.php */