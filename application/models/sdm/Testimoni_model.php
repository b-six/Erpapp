<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Testimoni_model
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

class Testimoni_model extends CI_Model {

  // ------------------------------------------------------------------------

  function get_testimoni()
  {
    $result = $this->db->get('testimoni');
    return $result;
  }

  function save_testimoni($id_testimoni, $id_pelanggan, $id_so, $testimoni_barang)
  {
    $data = array(
      'id_testimoni' => $id_testimoni,
      'id_pelanggan' => $id_pelanggan,
      'id_so' => $id_so,
      'testimoni_barang' => $testimoni_barang
    );
    $this->db->insert('testimoni', $data);
  }

  function update_testimoni($id_testimoni, $testimoni_barang)
  {
    $data = array(
      'testimoni_barang' => $testimoni_barang
    );
    $this->db->where('id_testimoni', $id_testimoni);
    $this->db->update('testimoni', $data);
  }

  function delete_testimoni($id_testimoni)
  {
    $this->db->where('id_testimoni', $id_testimoni);
    $this->db->delete('testimoni');
  }

  // ------------------------------------------------------------------------

}

/* End of file Testimoni_model.php */
/* Location: ./application/models/Testimoni_model.php */