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

  function tambah_data_dpj($no_surat_jalan_dpj, $id_barang, $nama_distributor, $tgl_surat_jalan_dpj, $sales_order){
    $tgl_produk_masuk = date('Y-m-d');
    $data = array(
      'no_surat_jalan_dpj' => $no_surat_jalan_dpj,
      'id_barang' => $id_barang,
      'nama_distributor' => $nama_distributor,
      'tgl_surat_jalan_dpj' => $tgl_surat_jalan_dpj,
      'id_so' => $sales_order
    );

      $this->db->insert('surat_jalan_distribusi_produk_jadi', $data);
  }
  function delete_data_sjdpj($id_sjdpj_delete){
    $this->db->where('no_surat_jalan_dpj', $id_sjdpj_delete);
    $this->db->delete('surat_jalan_distribusi_produk_jadi');
  }


  // ------------------------------------------------------------------------

}

/* End of file Sales_order_model_model.php */
/* Location: ./application/models/Sales_order_model_model.php */
