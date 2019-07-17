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


  function update_status($id_gaji, $status_validasi_gaji)
  {
    $data = array(
      'status_validasi_gaji' => $status_validasi_gaji
    );
    $this->db->where('id_gaji', $id_gaji);
    $this->db->update('gaji', $data);
  }

  // ------------------------------------------------------------------------

}

/* End of file Sales_order_model_model.php */
/* Location: ./application/models/Sales_order_model_model.php */
