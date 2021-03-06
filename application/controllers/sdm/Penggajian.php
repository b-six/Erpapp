<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penggajian extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('marketing/sales_order_model');
    $this->load->model('marketing/customer_model');
    $this->load->model('marketing/testimoni_model');
    $this->load->model('sdm/penggajian_model');
    $this->load->model('sdm/pegawai_model');
  }

  public function index()
  {
    $data['sales_order'] = $this->sales_order_model->get_sales_order();
    $data['customer'] = $this->customer_model->get_customer();
    $data['testimoni'] = $this->testimoni_model->get_testimoni();
    $data['penggajian'] = $this->penggajian_model->get_penggajian();
    $data['pegawai'] = $this->pegawai_model->get_pegawai();
    $this->load->view('sdm/hrd/penggajian_v', $data);
  }

  function save_testimoni()
  {
    $id_pelanggan = $this->input->post('id_so');
    $id_so = $this->input->post('id-so-' . $id_pelanggan);
    $id_testimoni = "T-" . $id_so;
    $testimoni_barang = $this->input->post('pesan');
    $testimoni = 'Y';
    $this->sales_order_model->update_status_testimoni($id_so, $testimoni);
    $this->testimoni_model->save_testimoni($id_testimoni, $id_pelanggan, $id_so, $testimoni_barang);
    redirect('marketing/testimoni');
  }

  function update_status()
  {
    $id_gaji = $this->input->post('id_gaji');
    $status_validasi_gaji = $this->input->post('status_gaji');
    $this->penggajian_model->update_status($id_gaji, $status_validasi_gaji);
    redirect('sdm/penggajian');
  }
}


/* End of file Testimoni.php */
/* Location: ./application/controllers/Testimoni.php */
