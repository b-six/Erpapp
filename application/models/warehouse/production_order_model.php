<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Production_order_model
 *
 * This Model for ...
 * 
 * @package   CodeIgniter
 * @category  Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class production_order_model extends CI_Model {

  // ------------------------------------------------------------------------

  function get_production_order()
  {
    $result = $this->db->get('production_order');
    return $result;
  }

  function get_stock_barang()
  {
    $result1 = $this->db->get('stock_barang');
    return $result1;
  }

  // ------------------------------------------------------------------------

}

/* End of file Production_order_model.php */
/* Location: ./application/models/Production_order_model.php */