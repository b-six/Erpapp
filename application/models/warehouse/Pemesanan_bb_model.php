<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Stock_barang_model
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

class Pemesanan_bb_model extends CI_Model {

  // ------------------------------------------------------------------------

  function get_pemesanan_bb(){
    $result = $this->db->get('pemesanan_bb');
    return $result;
  }

function save_pemesanan($id_pemesanan_bb, $id_bahan_baku, $jumlah, $id_supplier, $tanggal_pengiriman, $status)
  {
   $date = date('Y-m-d');
    $data = array(
      'id_pemesanan_bb' => $id_pemesanan_bb,
      'id_bahan_baku' => $id_bahan_baku,
      'jumlah' => $jumlah,
      'id_supplier'=> $id_supplier,
      'tanggal_pengiriman' => $date,
'status' => $status,
          );
    $this->db->insert('pemesanan_bb', $data);
  }

  function update_status($status, $id_pemesanan_bb)
  {
   
    $data = array(
    'status' => $status,
          );
   
    $this->db->where('id_pemesanan_bb', $id_pemesanan_bb);
    $this->db->update('pemesanan_bb', $data);
  }

  function delete($id_pemesanan_bb)
  {
    $this->db->where('id_pemesanan_bb', $id_pemesanan_bb);
    $this->db->delete('pemesanan_bb');
  }
  // ------------------------------------------------------------------------

}

/* End of file Stock_barang_model.php */
/* Location: ./application/models/Stock_barang_model.php */