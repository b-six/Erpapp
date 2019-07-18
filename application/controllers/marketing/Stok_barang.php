<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stok_barang extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('marketing/stock_barang_model');
    if ($this->session->userdata('status') == NULL) {
      redirect('welcome');
    }
  }

  public function index()
  {
    // $this->load->view('marketing/stok_barang_v');

    $data['stok_produk'] = $this->stock_barang_model->get_stock_barang();

    $this->load->view('marketing/stok_barang_v', $data);
    // Pseudecode

    // panggil method fetch table di model 
    // ambil semua data bungkus dalam array
    // tampilkan view
  }
}


/* End of file Stok_produk.php */
/* Location: ./application/controllers/Stok_produk.php */
