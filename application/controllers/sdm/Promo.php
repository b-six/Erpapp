<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Promo extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('marketing/promo_model');
	}

	public function index(){
		$data['promo'] = $this->promo_model->getPromo();

		$this->load->view('marketing/promo_v', $data);
	}

	function tambahPromo(){
		//upload Banner Promo
		$config = array(
			"upload_path" 	=> './document/marketing/promo',
			"allowed_types"	=> 'jpg|png|jpeg|gif',
			"max_size"		=> '8096',
			"encrypt_name"	=> TRUE
		);
		//load library upload
		$this->load->library('upload', $config);
		//upload file
		if($this->upload->do_upload('banner_promo')){
			//apabila berhasil
			$data = array('upload_data' => $this->upload->data());
		}else{
			//apabila error
			$error = array('error' => $this->upload->display_errors());
		}
		//ambil array upload_data dalam array data
		$upload_data = $data['upload_data'];

		//siapkan data
		$data = array(
			'id_promo'			=> $this->input->post('id_promo'),
			'produk'			=> $this->input->post('produk'),
			'jumlah_pembelian'	=> $this->input->post('jumlah_pembelian'),
			'banner_promo'		=> $upload_data['file_name']
		);

		$this->promo_model->savePromo($data);

		redirect('marketing/promo');
	}

	function hapusPromo(){
		$id_promo = $this->input->get('id_promo');

		$result = $this->promo_model->getOnePromo($id_promo);

		foreach($result as $v){
			$banner_promo = $v['banner_promo'];
		}

		if(unlink('document/marketing/promo/'.$banner_promo)){
			$error = array('banner_promo' => 'berhasil');
		}else{
			$error = array('banner_promo' => 'banner_promo tidak ditemukan');
		}

		$this->promo_model->hapusPromo($id_promo);

		redirect('marketing/promo');
	}


}


/* End of file Promo.php */
/* Location: ./application/controllers/Promo.php */