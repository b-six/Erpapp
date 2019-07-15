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

	function editPromo(){
		$id_promo = $this->input->post('id_promo');
		echo $this->input->post('produk');
		echo $this->input->post('jumlah_pembelian');

		//cek input type file
		// print_r($_FILES);
		// echo '<br>'.$_FILES['banner_promo']['error'];

		echo('<br><br>');

		//cek apakah bannernya diedit atau engga
		if (!empty($_FILES['banner_promo']['name'])) {
			//bannernya diedit 
			$upload_data = $this->uploadBanner();

			//ambil data dari database
			$result = $this->promo_model->getOnePromo($id_promo);
			$banner_promo = $result[0]['banner_promo'];
			
			//hapus banner promo yang lama
			if(unlink('document/marketing/promo/'.$banner_promo)){
				$error = array('banner_promo' => 'berhasil');
			}else{
				$error = array('banner_promo' => 'banner_promo tidak ditemukan');
			}
		}else{
			//bannernya ga diedit, ambil nama file dari database
			$result = $this->promo_model->getOnePromo($id_promo);

			$upload_data['file_name'] = $result[0]['banner_promo'];
		}

		$data = array(
			'produk'			=> $this->input->post('produk'),
			'jumlah_pembelian'	=> $this->input->post('jumlah_pembelian'),
			'banner_promo'		=> $upload_data['file_name']
		);


		$this->promo_model->updatePromo($id_promo, $data, 'promo');
		redirect('marketing/promo');
	}

	function uploadBanner(){
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
		return $data['upload_data'];
	}

	function tambahPromo(){
		//upload banner promo
		$upload_data = $this->uploadBanner();

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