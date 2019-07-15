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
   
  // ------------------------------------------------------------------------

}

/* End of file Stock_barang_model.php */
/* Location: ./application/models/Stock_barang_model.php */