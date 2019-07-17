<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Shopping_cart_model
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

class Bahan_baku_details_model extends CI_Model {

  // ------------------------------------------------------------------------

  function get_details()
  {
    $result = $this->db->get('bahan_baku');
    return $result;
  }

  // ------------------------------------------------------------------------

}

/* End of file Shopping_cart_model.php */
/* Location: ./application/models/Shopping_cart_model.php */