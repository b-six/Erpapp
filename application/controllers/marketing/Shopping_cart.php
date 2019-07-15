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
    $this->load->model('marketing/sales_order_model');
    $this->load->model('marketing/shopping_cart_model');
    $this->load->model('marketing/customer_model');
    $this->load->model('marketing/stock_barang_model');
  }

  public function index()
  {
    $id_sales_order = $this->uri->segment(4);
    $result = $this->sales_order_model->get_id_sales_order($id_sales_order);
    if ($result->num_rows() > 0) {
      $i = $result->row_array();
      $data = array(
        'id_so' => $i['id_so'],
        'id_pelanggan' => $i['id_pelanggan'],
        'total_pesanan' => $i['total_pesanan'],
        'total_barang' => $i['total_barang']
      );
      $data['shopping_cart'] = $this->shopping_cart_model->get_shopping_cart();
      $data['customer'] = $this->customer_model->get_customer();
      $data['stock_barang'] = $this->stock_barang_model->get_stock_barang();
      $this->load->view('marketing/shopping_cart_v', $data);
    } else {
      $address = $this->uri->segment(4);
      redirect('marketing/' . $address);
    }
  }

  function save_shopping_cart()
  {
    $id_so = $this->input->post('id_so');
    $id_sc = $this->input->post('id_sc');
    $id_barang = $this->input->post('id_produk');
    $jumlah_barang = $this->input->post('jumlah_barang');
    $total_harga = $this->input->post('total_harga');
    $total_pesanan = $this->input->post('total_pesanan');
    $total_barang = $this->input->post('total_barang');
    $total_jumlah_barang = $total_barang + $jumlah_barang;
    $total_harga_pesanan = $total_pesanan + $total_harga;
    $this->shopping_cart_model->save_shopping_cart($id_so, $id_sc, $id_barang, $jumlah_barang, $total_harga);
    $this->sales_order_model->update_total_pesanan($id_so, $total_harga_pesanan, $total_jumlah_barang);
    redirect('marketing/shopping_cart/index/' . $id_so);
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
