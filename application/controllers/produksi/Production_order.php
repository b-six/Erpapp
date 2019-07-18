<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Production_order extends CI_Controller
{
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('produksi/production_order_model');
    $this->load->model('produksi/stock_barang_model');
  }

  public function index()
  {
    $data['production_order'] = $this->production_order_model->get_production_order();
    $data['stock_barang'] = $this->stock_barang_model->get_stock_barang();
    $this->load->view('produksi/production_order_v', $data);
  }

  public function ubah_onprocess()
  {
    $id_po = $this->input->get('id_po');
    $status = "onprocess";
    $this->production_order_model->update_status($status, $id_po);
    redirect(base_url('produksi/production_order'));
  }

  public function ubah_success()
  {
    $id_po = $this->input->get('id_po');
    $status = "success";
    $this->production_order_model->update_status($status, $id_po);
    redirect(base_url('produksi/production_order'));
  }
}


/* End of file Production_order.php */
/* Location: ./application/controllers/Production_order.php */