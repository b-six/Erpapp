<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('marketing/sales_order_model');
    $this->load->model('marketing/customer_model');
    $this->load->model('marketing/testimoni_model');
    if ($this->session->userdata('status') == NULL) {
      redirect('welcome');
    }
  }

  public function index()
  {
    $data['sales_order'] = $this->sales_order_model->get_sales_order();
    $data['customer'] = $this->customer_model->get_customer();
    $data['testimoni'] = $this->testimoni_model->get_testimoni();
    $this->load->view('marketing/testimoni_v', $data);
  }

  function save_testimoni()
  {
    $id_pelanggan = $this->input->post('id_so');
    $id_so = $this->input->post('id-so-' . $id_pelanggan);
    $id_testimoni = "T-" . $id_so;
    $testimoni_barang = $this->input->post('pesan');
    $testimoni = 'Y';
    $this->sales_order_model->update_status_testimoni($id_so, $testimoni);
    $this->testimoni_model->save_testimoni($id_testimoni, $id_pelanggan, $id_so, $testimoni_barang);
    redirect('marketing/testimoni');
  }

  function update_testimoni()
  {
    $id_testimoni = $this->input->post('id_test-edit');
    $testimoni_barang = $this->input->post('pesan-edit');
    $this->testimoni_model->update_testimoni($id_testimoni, $testimoni_barang);
    redirect('marketing/testimoni');
  }

  function delete_testimoni()
  {
    $id_testimoni = $this->input->post('id_test_delete');
    $id_so = $this->input->post('id_so_delete_test');
    $this->testimoni_model->delete_testimoni($id_testimoni);
    $this->sales_order_model->delete_testimoni($id_so);
    redirect('marketing/testimoni');
  }
}


/* End of file Testimoni.php */
/* Location: ./application/controllers/Testimoni.php */
