<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produk_baru_model extends CI_Model {

	function save_upload($title, $image){
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