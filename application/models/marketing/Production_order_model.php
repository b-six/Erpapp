<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Production_order_model
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

class Production_order_model extends CI_Model {

  // ------------------------------------------------------------------------

  function get_production_order()
  {
    $result = $this->db->get('production_order');
    return $result;
  }

  function save_production_order($id_po, $jumlah_pesanan, $id_barang, $tanggal)
  {
    $data = array(
      'id_po' => $id_po,
      'jumlah_pesanan' => $jumlah_pesanan,
      'id_barang' => $id_barang,
      'tanggal' => $tanggal
    );
    $this->db->insert('production_order', $data);
  }

  function update_production_order($id_po, $jumlah_pesanan, $id_barang)
  {
    $data = array(
      'id_po' => $id_po,
      'jumlah_pesanan' => $jumlah_pesanan,
      'id_barang' => $id_barang
    );
    $this->db->where('id_po', $id_po);
    $this->db->update('production_order', $data);
  }

  function delete_production_order($id_po)
  {
    $this->db->where('id_po', $id_po);
    $this->db->delete('production_order');
  }

  // ------------------------------------------------------------------------

}

/* End of file Production_order_model.php */
/* Location: ./application/models/Production_order_model.php */