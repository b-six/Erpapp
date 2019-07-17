<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Controller Bahan Baku
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Bahan_baku extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('produksi/bahan_baku_model');
	}
  
	public function index(){
		$data['bahan_baku'] = $this->bahan_baku_model->get_bahan_baku();

		$this->load->view('produksi/bahan_baku_v', $data);

	}
	function save_bahan_baku(){
		$id_bb = $this->input->post('id_bahan_baku_produksi');
		$nama_bb = $this->input->post('nama_bb_produksi');
		$jumlah_bb = $this->input->post('jumlah_bb_produksi');
		$this->bahan_baku_model->save_bahan_baku($id_bb, $nama_bb, $jumlah_bb);
		redirect(base_url('produksi/bahan_baku'));
	}
}
/* End of file Promo.php */
/* Location: ./application/controllers/Promo.php */