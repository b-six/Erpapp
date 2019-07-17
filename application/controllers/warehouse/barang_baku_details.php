<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Controller Shopping_cart
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Shopping_cart extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('warehouse/bahan_baku_model');
    $this->load->model('warehouse/bahan_baku_details_model');
  }

  public function index()
  {
    $id_bahan_baku = $this->uri->segment(4);
    $result = $this->bahan_baku_model->get_bahan_baku($id_bahan_baku);
    if ($result->num_rows() > 0) {
      $i = $result->row_array();
      $data = array(
        'id_bahan_baku' => $i['id_bahan_baku'],
        'jml_bahan_baku' => $i['jml_bahan_baku'],
        'nama_bahan_baku' => $i['nama_bahan_baku'],
        'keterangan_bahan_baku' => $i['keterangan_bahan_baku']
      );
      $data['bahan_baku'] = $this->bahan_baku_model->get_bahan_baku();
      $this->load->view('warehouse/bahan_baku_details_v', $data);
    } else {
      $address = $this->uri->segment(4);
      redirect('warehouse/' . $address);
    }
  }

  /* function shopping_cart_view()
  {
    $id_sales_order = $this->uri->segment(4);
    $result = $this->sales_order_model->get_id_sales_order($id_sales_order);
    if ($result->num_rows() > 0) {
      $i = $result->row_array();
      $data = array(
        'id_so' => $i['id_so'],
        'id_pelanggan' => $i['id_pelanggan'],
        'total_pesanan' => $i['total_pesanan']
      );
      $data['shopping_cart'] = $this->shopping_cart_model->get_shopping_cart();
      $data['customer'] = $this->customer_model->get_customer();
      $data['stock_barang'] = $this->stock_barang_model->get_stock_barang();
      $this->load->view('marketing/shopping_cart_v', $data);
    } else {
      $address = $this->uri->segment(4);
      redirect('marketing/'.$address);
    }
  } */
}


/* End of file Shopping_cart.php */
/* Location: ./application/controllers/Shopping_cart.php */
