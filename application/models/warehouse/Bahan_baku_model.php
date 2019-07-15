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

class Bahan_baku_model extends CI_Model {

  // ------------------------------------------------------------------------

  function get_bahan_baku(){
    $result = $this->db->get('bahan_baku');
    return $result;
  }

  function get_supplier(){
    $result1 = $this->db->get('supplier');
    return $result1;
  }

   function get_bahan_baku_masuk(){
    $result2 = $this->db->get('bahan_baku_masuk');
    return $result2;
  }


   function get_bahan_baku_keluar(){
    $result3 = $this->db->get('bahan_baku_keluar');
    return $result3;
  }


   function get_surat_jalan_pengiriman_bahan_baku(){
    $result4 = $this->db->get('surat_jalan_pengiriman_bahan_baku');
    return $result4;
  }
  // ------------------------------------------------------------------------

}

/* End of file Stock_barang_model.php */
/* Location: ./application/models/Stock_barang_model.php */