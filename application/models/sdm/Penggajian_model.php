<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penggajian_model extends CI_Model
{

  // ------------------------------------------------------------------------

  function get_penggajian()
  {
    $result = $this->db->get('gaji');
    return $result;
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
