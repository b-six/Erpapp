<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penerimaan_barang_baku_model extends CI_Model
{

  // ------------------------------------------------------------------------

  function get_bahan_baku_masuk()
  {
    $result = $this->db->get('bahan_baku_masuk');
    return $result;
  } 

function get_retur_bahan_baku()
  {
    $result2 = $this->db->get('retur_bahan_baku');
    return $result2;
  } 

  function save_retur_bahan_baku($id_retur, $id_bahan_baku, $jml_bahan_baku, $id_supplier, $alasan)
  {
    $date = date('Y-m-d');
    $data = array(
      'id_retur' => $id_retur,
      'tgl_retur' => $date,
      //'tanggal_retur' => $date,
      'id_bahan_baku' => $id_bahan_baku,
      'jml_bahan_baku' => $jml_bahan_baku,
      'id_supplier'=>$id_supplier,
      'alasan'=>$alasan
    ); 
    $this->db->insert('retur_bahan_baku', $data);
  }

  function get_id_retur($id_retur)
  {
    $query = $this->db->get_where('retur_bahan_baku', array('id_retur' => $id_retur));
    return $query;
  }

  // function delete_bahan_baku_masuk($id_retur)
  // {
  //   $this->db->where('id_bahan_baku_masuk, $id_bahan_baku_masuk);
  //   $this->db->delete('bahan_baku_masuk');
  // }

  // ------------------------------------------------------------------------

}

/* End of file Sales_order_model_model.php */
/* Location: ./application/models/Sales_order_model_model.php */
