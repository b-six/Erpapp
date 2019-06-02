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

  // ------------------------------------------------------------------------

}

/* End of file Stock_barang_model.php */
/* Location: ./application/models/Stock_barang_model.php */