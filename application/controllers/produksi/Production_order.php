<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Production_order extends CI_Controller
{
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('marketing/production_order_model');
    $this->load->model('marketing/stock_barang_model');
  }

  public function index()
  {
    $data['production_order'] = $this->production_order_model->get_production_order();
    $data['stock_barang'] = $this->stock_barang_model->get_stock_barang();
    $this->load->view('produksi/production_order_v', $data);
  }

  function save_production_order()
  {
    $id_barang = $this->input->post('id_produk');
    $jumlah_pesanan = $this->input->post('jumlah_barang');
    $tanggal = date('Ymd');
    $id_po = $this->input->post('id_po');
    $this->production_order_model->save_production_order($id_po, $jumlah_pesanan, $id_barang, $tanggal);
    redirect('marketing/production_order');
  }

  function update_production_order()
  {
    $id_po = $this->input->post('id_po-edit');
    $id_barang = $this->input->post('id_produk-edit');
    $jumlah_pesanan = $this->input->post('jumlah_barang-edit');
    $this->production_order_model->update_production_order($id_po, $jumlah_pesanan, $id_barang);
    redirect('marketing/production_order');
  }

  function delete_production_order()
  {
    $id_po = $this->input->get('id_po_delete');
    $this->production_order_model->delete_production_order($id_po);
    redirect('marketing/production_order');
  }

}


/* End of file Production_order.php */
/* Location: ./application/controllers/Production_order.php */