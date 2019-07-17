<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock_barang_model extends CI_Model {

  // ------------------------------------------------------------------------

	function getJumlahStok(){
		$this->db->select('nama_barang, jumlah_stok_barang');
		return $this->db->get('stock_barang')->result_array();
	}

	function get_stock_barang(){

		$result = $this->db->get('stock_barang');

		return $result;
	}

  // ------------------------------------------------------------------------

}

/* End of file Stock_barang_model.php */
/* Location: ./application/models/Stock_barang_model.php */