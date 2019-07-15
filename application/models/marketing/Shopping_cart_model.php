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

class Shopping_cart_model extends CI_Model {

  // ------------------------------------------------------------------------

  function get_shopping_cart()
  {
    $result = $this->db->get('shopping_cart');
    return $result;
  }

  function save_shopping_cart($id_so, $id_sc, $id_barang, $jumlah_barang, $total_harga)
  {
    $date = date('Y-m-d');
    $data = array(
      'id_sc' => $id_sc,
      'id_so' => $id_so,
      'id_barang' => $id_barang,
      'jumlah_barang' => $jumlah_barang,
      'total_harga' => $total_harga,
      'tanggal_pesanan' => $date
    );
    $this->db->insert('shopping_cart', $data);
  }

  function update_shopping_cart($id_sc, $id_barang, $jumlah_barang, $total_harga)
  {
    $data = array(
      'id_sc' => $id_sc,
      'id_barang' => $id_barang,
      'jumlah_barang' => $jumlah_barang,
      'total_harga' => $total_harga
    );
    $this->db->where('id_sc', $id_sc);
    $this->db->update('shopping_cart', $data);
  }

  function delete_shopping_cart($id_sc)
  {
    $this->db->where('id_sc', $id_sc);
    $this->db->delete('shopping_cart');
  }
  // ------------------------------------------------------------------------

}

/* End of file Shopping_cart_model.php */
/* Location: ./application/models/Shopping_cart_model.php */