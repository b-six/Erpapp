<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock_barang_model extends CI_Model {

  // ------------------------------------------------------------------------

  function get_stock_barang(){
  	
    $result = $this->db->get('stock_barang');

    return $result;
  }

  // ------------------------------------------------------------------------

}

/* End of file Stock_barang_model.php */
/* Location: ./application/models/Stock_barang_model.php */