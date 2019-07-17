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

class Surat_jalan_model extends CI_Model
{

  // ------------------------------------------------------------------------

  function get_surat_jalan_distribusi_produk_jadi()
  {
    $result = $this->db->get('surat_jalan_distribusi_produk_jadi');
    return $result;
  }

   function get_surat_jalan_pengiriman_bahan_baku(){
    $result1 = $this->db->get('surat_jalan_pengiriman_bahan_baku');
    return $result1;
  }

   function get_stock_barang(){
    $result2 = $this->db->get('stock_barang');
    return $result2;
  }

function save_surat_jalan_pbb($no_surat_jalan_pbb,
$id_bahan_baku, $nama_kurir, $tgl_surat_jalan_pbb)
  {
    $date = date('Y-m-d');
    $data = array(
      'no_surat_jalan_pbb' => $no_surat_jalan_pbb,
      'id_bahan_baku' => $id_bahan_baku,
      'nama_kurir' => $nama_kurir,
      'tgl_surat_jalan_pbb' => $date
    );
    $this->db->insert('surat_jalan_pengiriman_bahan_baku', $data);
  }

 function delete_sjpbb($no_surat_jalan_pbb)
  {
    $this->db->where('no_surat_jalan_pbb', $no_surat_jalan_pbb);
    $this->db->delete('surat_jalan_pengiriman_bahan_baku');
  }

  // ------------------------------------------------------------------------


}

/* End of file Sales_order_model_model.php */
/* Location: ./application/models/Sales_order_model_model.php */
