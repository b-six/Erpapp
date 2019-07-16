<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Customer_model
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

class Pegawai_model extends CI_Model
{

  // ------------------------------------------------------------------------

  function get_pegawai()
  {
    $result = $this->db->get('pegawai');
    return $result;
  }

  function save_pegawai($id_pegawai, $nama_pegawai, $golongan, $id_pendidikan, $umur, $alamat, $email, $tgl_diterima, $rekening)
  {
    $data = array(
      'id_pegawai' => $id_pegawai,
      'nama_pegawai' => $nama_pegawai,
      'id_golongan' => $golongan,
      'id_pendidikan' => $id_pendidikan,
      'umur' => $umur,
      'alamat' => $alamat,
      'email' => $email,
      'tgl_diterima' => $tgl_diterima,
      'rekening_pegawai' => $rekening
    );
    $this->db->insert('pegawai', $data);
  }

  function update_pegawai( $id_pegawai, $golongan, $id_pendidikan, $umur, $alamat, $email, $rekening)
  {
    $data = array(
      'id_pegawai' => $id_pegawai,
      'id_golongan' => $golongan,
      'id_pendidikan' => $id_pendidikan,
      'umur' => $umur,
      'alamat' => $alamat,
      'email' => $email,
      'rekening_pegawai' => $rekening
    );
    $this->db->where('id_pegawai', $id_pegawai);
    $this->db->update('pegawai', $data);
  }

  function delete_pegawai($id_pegawai)
  {
    $this->db->where('id_pegawai', $id_pegawai);
    $this->db->delete('pegawai');
  }

  // ------------------------------------------------------------------------

}

/* End of file Customer_model.php */
/* Location: ./application/models/Customer_model.php */
