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

class Buat_planning_model extends CI_Model 
{

  // ------------------------------------------------------------------------

  function get_perencanaan_produksi()
  {
    $result = $this->db->get('perencanaan_produksi');
    return $result;
  }

  function save_perencanaan_produksi($id_perencanaan_produksi, $id_bahan_baku_produksi, $jadwal_perencanaan,$id_po,$id_pegawai)
  {
    $data = array(
      'id_perencanaan_produksi' => $id_perencanaan_produksi,
      'id_bahan_baku_produksi' => $id_bahan_baku_produksi,
      'jadwal_perencanaan' => $jadwal_perencanaan,
      'id_po' => $id_po,
      'id_pegawai' => $id_pegawai,
    );
    $this->db->insert('perencanaan_produksi', $data);
  }

  // ------------------------------------------------------------------------

}

/* End of file Testimoni_model.php */
/* Location: ./application/models/Testimoni_model.php */