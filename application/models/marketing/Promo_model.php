<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Promo_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	function updatePromo($where, $data, $table){
		$this->db->where('id_promo', $where);
		$this->db->update($table, $data);
	}

	function hapusPromo($id_promo){
		$this->db->where('id_promo', $id_promo);
		$this->db->delete('promo');
	}

	function getOnePromo($id_promo){
		$this->db->where('id_promo', $id_promo);
		return $this->db->get('promo')->result_array();
	}

	function getPromo(){
		return $this->db->get('promo')->result_array();
	}

	function savePromo($data){
		$this->db->insert('promo', $data);
	}

}

/* End of file Promo_model.php */
/* Location: ./application/models/Promo_model.php */