<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_customer extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('marketing/customer_model');
    if ($this->session->userdata('status') == NULL) {
      redirect('welcome');
    }
  }

  public function index()
  {
    $data['customer'] = $this->customer_model->get_customer();
    $this->load->view('marketing/data_customer_v', $data);
  }

  function save_customer()
  {
    $id_pelanggan = $this->input->post('id_pelanggan');
    $nama_pelanggan = $this->input->post('nama_pelanggan');
    $tipe_customer = $this->input->post('tipe_customer');
    $wilayah = $this->input->post('wilayah');
    $email = $this->input->post('email_pelanggan');
    $password = $this->input->post('password_pelanggan');
    $this->customer_model->save_customer($id_pelanggan, $nama_pelanggan, $tipe_customer, $wilayah, $email, $password);
    redirect('marketing/data_customer');
  }

  function update_customer()
  {
    $nama_pelanggan = $this->input->post('nama_pelanggan-edit');
    $id_pelanggan = $this->input->post('id_pelanggan-edit');
    $tipe_customer = $this->input->post('tipe_customer-edit');
    $wilayah = $this->input->post('wilayah-edit');
    $email = $this->input->post('email_pelanggan-edit');
    $password = $this->input->post('password_pelanggan-edit');
    $this->customer_model->update_customer($id_pelanggan, $nama_pelanggan, $tipe_customer, $wilayah, $email, $password);
    redirect('marketing/data_customer');
  }

  function delete_customer()
  {
    $id_pelanggan = $this->input->get('id_cust_delete');
    $this->customer_model->delete_customer($id_pelanggan);
    redirect('marketing/data_customer');
  }

}


/* End of file Data_customer.php */
/* Location: ./application/controllers/Data_customer.php */