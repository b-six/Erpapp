<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Hasil_produksi_model
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

class Hasil_produksi_model extends CI_Model {

  // ------------------------------------------------------------------------

  function get_hasil_produksi_model(){
    $result = $this->db->get('hasil_produksi');
    return $result;
  }

  function save_hasil_produksi($id_hasil_produksi, $jumlah_produksi, $jenis_barang, $nama_barang, $tanggal, $keterangan_barang)
  {
    $date = date('Y-m-d');
    $data = array(
      'id_hasil_produksi' => $id_hasil_produksi,
      'jumlah_barang' => $jumlah_produksi,
      'jenis_barang' => $jenis_barang,
      'nama_barang' => $nama_barang,
      'tgl_hasil_produksi' => $tanggal,
      'keterangan_barang' => $keterangan_barang
    );
    $this->db->insert('hasil_produksi', $data);
  }

  // ------------------------------------------------------------------------

}

/* End of file Customer_model.php */
/* Location: ./application/models/Customer_model.php */