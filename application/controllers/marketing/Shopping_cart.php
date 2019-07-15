<?php
defined('BASEPATH') or exit('No direct script access allowed');

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

  function update_shopping_cart()
  {
    $id_sc = $this->input->post('id_sc-edit');
    $id_so = $this->input->post('id_so-edit');
    $total_pesanan_now = $this->input->post('total_pesanan');
    $total_barang_edit = $this->input->post('total_barang');
    $jumlah_barang_now = $this->input->post('jumlah_barang_now');
    $id_sc_index = intval($id_sc);
    $id_barang = $this->input->post('id_produk-edit');
    $total_harga_before = $this->input->post('total_harga-before');
    $jumlah_barang = $this->input->post('jumlah_barang-edit');
    $total_harga = $this->input->post('total_harga-edit');
    $kumulasi_harga = $total_harga-$total_harga_before;
    $kumulasi_jumlah_barang = $jumlah_barang - $jumlah_barang_now;
    $total_pesanan = $total_harga_before + $kumulasi_harga;
    $kumulatif_total_hargaA = $total_pesanan - $total_harga_before;
    $kumulatif_total_hargaB = $total_pesanan_now + $kumulatif_total_hargaA;
    $total_barang = $total_barang_edit + $kumulasi_jumlah_barang;
    $this->shopping_cart_model->update_shopping_cart($id_sc, $id_barang, $jumlah_barang, $total_harga, $total_pesanan);
    $this->sales_order_model->update_total_pesanan($id_so, $kumulatif_total_hargaB, $total_barang);
    redirect('marketing/shopping_cart/index/'.$id_sc_index);
  }

  function delete_shopping_cart()
  {
    $id_sc = $this->input->post('id_sc_delete');
    $id_so = $this->input->post('id_so_delete');
    $jumlah_barang_so = $this->input->post('jumlah_barang_so');
    $jumlah_barang_item = $this->input->post('jumlah_barang_item');
    $jumlah_barang = $jumlah_barang_so - $jumlah_barang_item;
    $harga_so = $this->input->post('harga_so');
    $harga_item = $this->input->post('harga_item');
    $harga = $harga_so - $harga_item;
    $this->shopping_cart_model->delete_shopping_cart($id_sc);
    $this->sales_order_model->update_kumulasi_delete_sc($id_so, $harga, $jumlah_barang);
    $id_sc_index = intval($id_sc);
    redirect('marketing/shopping_cart/index/'.$id_sc_index);
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
