<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_baru extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('marketing/produk_baru_model');
  }

  public function index()
  {
    $this->load->view('marketing/produk_baru_v');
  }

  public function tambahProduk(){
  	$nama_barang = $this->input->post('nama');
  	$jenis_barang = $this->input->post('jenis');
  	$harga_barang = $this->input->post('harga');
  }

  public function upload(){
  	echo json_encode(array("imageData"=>'berhasil'));
  }

  public function uploadGambar(){
  	echo json_encode(array("imageData"=>'berhasil'));
  	return;

  	$data = $this->input->post('image');

  	list($type, $data) = explode(';', $data);
  	list(, $data)	   = explode(',', $data);

  	$data = base64_decode($data);

  	$config = array(
  					"upload_path" 	=> "./document/marketing/produk_baru/tampilan",
  					"allowed_types" => 'gif|jpg|png',
  					"max_size"		=> "2048",
  					"encrypt_name"	=> TRUE
  	);

  	$this->load->library('upload', $config);

  // 	// $datax = $this->input->post('image');
  // 	// $datax = base64_decode($data);

  	if($this->upload->do_upload($data)){
  		$data = array('upload_data'=> $this->upload->data());
  		echo json_encode(array("imageData"=>$data));

  // 		// print_r($data);
  // 		// exit();

  // 		//balik ke halaman produk_baru
  // 		// $this->load->view('marketing/produk_baru', $data);

  // 		// $title = $this->input->post('title');
  // 		// $image = $data['upload_data']['file_name'];

  // 		// $result = $this->produk_baru_model->save_upload($title, $image);
  // 		// echo json_decode($result);
  	}else{
  		$data = array('error' => $this->upload->display_errors());
  		echo json_encode(array("imageData"=>$data));
  // 		// print_r($data);
  // 		// exit();
  // 		$this->load->view('marketing/produk_baru', $data);
  	}
  }

}

/* End of file Produk_baru.php */
/* Location: ./application/controllers/Produk_baru.php */