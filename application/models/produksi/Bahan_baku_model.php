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

class bahan_baku_model extends CI_Model {

  // ------------------------------------------------------------------------

  function get_bahan_baku()
  {
    $result = $this->db->get('bahan_baku');
    return $result;
  }



  function save_bahan_baku($id_bb, $nama_bb, $jumlah_bb, $tgl_bb)
  {
    $data = array(
      'id_bahan_baku' => $id_bb,
      'jml_bahan_baku' => $jumlah_bb,
      'nama_bahan_baku' => $nama_bb
    );
    $this->db->insert('bahan_baku', $data);
  }
  function getPromo(){
    return $this->db->get('promo')->result_array();
  } 

  // ------------------------------------------------------------------------

}

/* End of file Testimoni_model.php */
/* Location: ./application/models/Testimoni_model.php */