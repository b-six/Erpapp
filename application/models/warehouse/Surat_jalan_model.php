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


  // ------------------------------------------------------------------------

}

/* End of file Sales_order_model_model.php */
/* Location: ./application/models/Sales_order_model_model.php */
