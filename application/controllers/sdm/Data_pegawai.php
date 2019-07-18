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
    // print_r ($data['pegawai']->result_array());
    // exit();
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
    $foto = $this->simpanFoto('foto');
    // print_r ($foto);
    // exit();
    $this->pegawai_model->save_pegawai($id_pegawai, $nama_pegawai, $golongan, $id_pendidikan, $umur, $alamat, $email, $tgl_diterima, $rekening, $no_telp, $foto);
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
    $foto = $this->simpanFoto('foto');
    if($stts=='aktif') {
      $tgl_berhenti = null;
    } else {
      $tgl_berhenti = date("Y-m-d");
    }
    
    $this->pegawai_model->update_pegawai($id_pegawai, $nama_pegawai, $golongan, $id_pendidikan, $umur, $alamat, $email, $rekening, $no_telp, $stts, $foto, $tgl_berhenti);
    // echo $id_pegawai. "**". $nama_pegawai;
    redirect('sdm/data_pegawai');
  }
  

  function simpanFile(){
    //upload file desain
    $config = array(
      "upload_path"   => "./document/sdm/sk",
      "allowed_types" => 'pdf|doc|docx|ppt|pptx',
      "max_size"      => "16192",
      "encrypt_name"  => TRUE
    );
    //load library upload
    $this->load->library('upload', $config);
    // upload file
    if($this->upload->do_upload('file_sk')){
      //apabila berhasil
      $data = array('upload_data' => $this->upload->data());
      // print_r($data);
    }else{
      //apabila error
      $error = array('error' => $this->upload->display_errors());
      // print_r($error);
    }
    //ambil array upload_data dalam array data
    return $data['upload_data'];
  }
  
  function simpanFoto(){
    //upload foto pegawai
    $config = array(
      "upload_path"   => "./document/sdm/foto",
      "allowed_types" => 'jpg|png|gif|bmp',
      "max_size"      => "16192",
      "encrypt_name"  => TRUE
    );
    //load library upload
    $this->load->library('upload', $config);
    // upload file
    if($this->upload->do_upload('foto')){
      //apabila berhasil
      $data = array('upload_data' => $this->upload->data());
      // print_r($data);
    }else{
      //apabila error
      $error = array('error' => $this->upload->display_errors());
      // print_r($error);
    }
    //ambil array upload_data dalam array data
    return $data['upload_data']['file_name'];
  }
  
  function delete_pegawai()
  {
    $id_pegawai = $this->input->get('id_pegawai_delete');
    $result = $this->pegawai_model->getOnePegawai($id_pegawai);
    foreach($result as $v){
      $file_sk = $v['file_sk'];
      $foto = $v['foto'];
    }
    
    if(unlink('document/sdm/sk'.$file_sk)){
      $error = array('file_sk' => 'berhasil');
    }else{
      $error = array('file_sk' => 'file_sk tidak ditemukan');
    }
    
    if(unlink('document/sdm/foto'.$foto)){
      $error = array('foto' => 'berhasil');
    }else{
      $error = array('foto' => 'foto tidak ditemukan');
    }
    $this->pegawai_model->delete_pegawai($id_pegawai);
    redirect('sdm/data_pegawai');
  }

}


/* End of file Data_pegawai.php */
/* Location: ./application/controllers/Data_pegawai.php */