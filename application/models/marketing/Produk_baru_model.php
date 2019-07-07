<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produk_baru_model extends CI_Model {
	function hapusProdukBaru($id_barang){
		$this->db->where('id_barang', $id_barang);
		$this->db->delete('produk_baru');
	}
	function getOneProdukBaru($id_barang){
		$this->db->where('id_barang', $id_barang);
		return $this->db->get('produk_baru')->result_array();
	}

	function getProdukBaru(){
		$result = $this->db->get('produk_baru');
		return $result;
	}

	function saveProdukBaru($data){
		$this->db->insert('produk_baru', $data);
	}
	function saveUpload($title, $image){
		$data = array(
				'title'		=> $title,
				'file_name'	=> $image
			);
		$result = $this->db->insert('gallery, $data');
		return $result;
	}
}

/* End of file Produk_baru_model.php */
/* Location: ./application/models/Produk_baru_model.php */