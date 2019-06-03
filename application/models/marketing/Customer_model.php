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

  function save_customer($id_pelanggan, $nama_pelanggan, $tipe_customer, $wilayah)
  {
    $date = date('Y-m-d');
    $data = array(
      'id_pelanggan' => $id_pelanggan,
      'nama_pelanggan' => $nama_pelanggan,
      'tipe_customer' => $tipe_customer,
      'wilayah' => $wilayah,
      'sejak' => $date
    );
    $this->db->insert('customer', $data);
  }

  // ------------------------------------------------------------------------

}

/* End of file Customer_model.php */
/* Location: ./application/models/Customer_model.php */