<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_pegawai extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('sdm/pegawai_model');
  }

  public function index()
  {

    $data['pegawai'] = $this->pegawai_model->get_pegawai();
    // print_r ($data);
    $this->load->view('sdm/hrd/data_pegawai_v', $data);
  }

  function save_pegawai()
  {
    $id_pegawai = $this->input->post('id_pegawai');
    $nama_pegawai = $this->input->post('nama_pegawai');
    $golongan = $this->input->post('id_golongan');
    $id_pendidikan = $this->input->post('id_pendidikan');
    $umur = $this->input->post('umur');
    $alamat = $this->input->post('alamat');
    $email = $this->input->post('email');
    $tgl_diterima = $this->input->post('tgl_diterima');
    $rekening = $this->input->post('rekening_pegawai');
    $no_telp = $this->input->post('no_telp');
    $this->pegawai_model->save_pegawai($id_pegawai, $nama_pegawai, $golongan, $id_pendidikan, $umur, $alamat, $email, $tgl_diterima, $rekening, $no_telp);
    redirect('sdm/data_pegawai');
  }
  function update_pegawai()
  {
    $id_pegawai = $this->input->post('id_pegawai-edit');
    $nama_pegawai = $this->input->post('nama_pegawai-edit');
    $golongan = $this->input->post('id_golongan');
    $id_pendidikan = $this->input->post('id_pendidikan');
    $umur = $this->input->post('umur');
    $alamat = $this->input->post('alamat-edit');
    $email = $this->input->post('email-edit');
    $rekening = $this->input->post('rekening_pegawai-edit');
    $no_telp = $this->input->post('no_telp-edit');
    $stts = $this->input->post('stts');
    $this->pegawai_model->update_pegawai($id_pegawai, $nama_pegawai, $golongan, $id_pendidikan, $umur, $alamat, $email, $rekening, $no_telp, $stts);
    // echo $id_pegawai. "**". $nama_pegawai;
    redirect('sdm/data_pegawai');
  }

  public function uploadGambar(){
    $data = $this->input->post('image');

    list($type, $data) = explode(';', $data);
    list(, $data)	     = explode(',', $data);

    $data = base64_decode($data);
    $imageName = time().uniqid(rand()).'.png';
    file_put_contents('document/marketing/produk_baru/tampilan/'.$imageName, $data);
    echo json_encode($imageName);
}

  function delete_pegawai()
  {
    $id_pegawai = $this->input->get('id_pegawai_delete');
    $this->pegawai_model->delete_pegawai($id_pegawai);
    redirect('sdm/data_pegawai');
  }
}


/* End of file Data_pegawai.php */
/* Location: ./application/controllers/Data_pegawai.php */