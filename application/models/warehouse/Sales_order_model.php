<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Sales_order_model_model
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

class Sales_order_model extends CI_Model
{

  // ------------------------------------------------------------------------

  function get_sales_order()
  {
    $result = $this->db->get('sales_order');
    return $result;
  }

   function get_customer(){
    $result1 = $this->db->get('customer');
    return $result1;
  }


  // ------------------------------------------------------------------------

}

/* End of file Sales_order_model_model.php */
/* Location: ./application/models/Sales_order_model_model.php */
