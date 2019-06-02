<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Customer_model
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

class Customer_model extends CI_Model {

  // ------------------------------------------------------------------------

  function get_customer(){
    $result = $this->db->get('customer');
    return $result;
  }

  // ------------------------------------------------------------------------

}

/* End of file Customer_model.php */
/* Location: ./application/models/Customer_model.php */