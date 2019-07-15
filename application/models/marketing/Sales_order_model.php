<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sales_order_model extends CI_Model
{

  // ------------------------------------------------------------------------

  function get_sales_order()
  {
    $result = $this->db->get('sales_order');
    return $result;
  }

  function save_sales_order($id_so, $id_pelanggan)
  {
    $date = date('Y-m-d');
    $data = array(
      'id_so' => $id_so,
      'id_pelanggan' => $id_pelanggan,
      'tanggal_pesanan' => $date
    );
    $this->db->insert('sales_order', $data);
  }

  function get_id_sales_order($id_sales_order)
  {
    $query = $this->db->get_where('sales_order', array('id_so' => $id_sales_order));
    return $query;
  }

  function update_total_pesanan($id_so, $total_harga_pesanan, $total_jumlah_barang)
  {
    $data = array(
      'total_pesanan' => $total_harga_pesanan,
      'total_barang' => $total_jumlah_barang
    );
    $this->db->where('id_so', $id_so);
    $this->db->update('sales_order', $data);
  }

  function update_status_testimoni($id_so, $testimoni)
  {
    $data = array(
      'testimoni' => $testimoni
    );
    $this->db->where('id_so', $id_so);
    $this->db->update('sales_order', $data);
  }

  function update_sales_order($id_so, $id_pelanggan)
  {
    $data = array(
      'id_so' => $id_so,
      'id_pelanggan' => $id_pelanggan
    );
    $this->db->where('id_so', $id_so);
    $this->db->update('sales_order', $data);
  }

  function delete_sales_order($id_so)
  {
    $this->db->where('id_so', $id_so);
    $this->db->delete('sales_order');
  }

  function delete_shopping_cart($id_so)
  {
    $this->db->where('id_so', $id_so);
    $this->db->delete('shopping_cart');
  }

  function update_kumulasi_delete_sc($id_so, $harga, $jumlah_barang)
  {
    $data = array(
      'total_pesanan' => $harga,
      'total_barang' => $jumlah_barang
    );
    $this->db->where('id_so', $id_so);
    $this->db->update('sales_order', $data);
  }

  function delete_testimoni($id_so)
  {
    $test = 'N';
    $data = array(
      'testimoni' => $test
    );
    $this->db->where('id_so', $id_so);
    $this->db->update('sales_order', $data);
  }
  // ------------------------------------------------------------------------

}

/* End of file Sales_order_model_model.php */
/* Location: ./application/models/Sales_order_model_model.php */
