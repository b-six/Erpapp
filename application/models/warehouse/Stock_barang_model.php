<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Stock_barang_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Stock_barang_model extends CI_Model {

  // ------------------------------------------------------------------------
  public function __construct(){
    parent::__construct();
  }
  
  function get_stock_barang(){
    $result = $this->db->get('stock_barang');
    return $result;
  }

  function get_customer(){
    $result1 = $this->db->get('customer');
    return $result1;
  }

function get_produk_jadi_keluar(){
    $result2 = $this->db->get('produk_jadi_keluar');
    return $result2;
  }
  
  function get_produk_jadi_masuk(){
    $result3 = $this->db->get('produk_jadi_masuk');
    return $result3;
  }
  function tambah_data_pjm($id_produk_jadi_masuk, $id_barang, $jml_barang_masuk, $tgl_produk_masuk){
    $tgl_produk_masuk = date('Y-m-d');
    $data = array(
      'id_produk_jadi_masuk' => $id_produk_jadi_masuk,
      'id_barang' => $id_barang,
      'jml_barang_masuk' => $jml_barang_masuk,
      'tgl_produk_masuk' => $tgl_produk_masuk,
    );

      $this->db->insert('produk_jadi_masuk', $data);
  }

  function tambah_data_pjk($id_produk_keluar, $id_barang, $id_pelanggan, $jml_produk_keluar, $tgl_produk_keluar){
    $tgl_produk_keluar = date('Y-m-d');
    $data = array(
      'id_produk_keluar' => $id_produk_keluar,
      'id_barang' => $id_barang,
      'id_pelanggan' => $id_pelanggan,
      'jml_produk_keluar' => $jml_produk_keluar,
      'tgl_produk_keluar' => $tgl_produk_keluar,
    );

    $this->db->insert('produk_jadi_keluar', $data);
  }
  function delete_data_pjm($id_produk_jadi_masuk_delete){
    $this->db->where('id_produk_jadi_masuk', $id_produk_jadi_masuk_delete);
    $this->db->delete('produk_jadi_masuk');
  }

  function delete_data_pjk($id_pjk_delete){
    $this->db->where('id_produk_keluar', $id_pjk_delete);
    $this->db->delete('produk_jadi_keluar');
  }

  // ------------------------------------------------------------------------
  

}

/* End of file Stock_barang_model.php */
/* Location: ./application/models/Stock_barang_model.php */