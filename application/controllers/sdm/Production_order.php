<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Production_order extends CI_Controller
{
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('sdm/production_order_model');
    $this->load->model('sdm/stock_barang_model');
  }

  public function index()
  {
    $data['production_order'] = $this->production_order_model->get_production_order();
    $data['stock_barang'] = $this->stock_barang_model->get_stock_barang();
    $this->load->view('sdm/production_order_v', $data);
  }

  function save_production_order()
  {
    $id_barang = $this->input->post('id_produk');
    $jumlah_pesanan = $this->input->post('jumlah_barang');
    $tanggal = date('Ymd');
    $id_po = $this->input->post('id_po');
    $this->production_order_model->save_production_order($id_po, $jumlah_pesanan, $id_barang, $tanggal);
    redirect('sdm/production_order');
  }

}


/* End of file Production_order.php */
/* Location: ./application/controllers/Production_order.php */