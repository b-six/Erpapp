<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sales_order extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('marketing/sales_order_model');
    $this->load->model('marketing/customer_model');
    if ($this->session->userdata('status') == NULL) {
      redirect('welcome');
    }
  }

  public function index()
  {
    $data['sales_order'] = $this->sales_order_model->get_sales_order();
    $data['customer'] = $this->customer_model->get_customer();
    $this->load->view('marketing/sales_order_v', $data);
  }

  function save_sales_order()
  {
    $id_so = $this->input->post('id_so');
    $id_pelanggan = $this->input->post('id_pelanggan');
    $this->sales_order_model->save_sales_order($id_so, $id_pelanggan);
    redirect('marketing/sales_order');
  }

  function update_sales_order()
  {
    $id_so = $this->input->post('id_so_edit');
    $id_pelanggan = $this->input->post('id_pelanggan-edit');
    $this->sales_order_model->update_sales_order($id_so, $id_pelanggan);
    redirect('marketing/sales_order');
  }

  function delete_sales_order()
  {
    $id_so = $this->input->get('id_so_delete');
    $this->sales_order_model->delete_sales_order($id_so);
    $this->sales_order_model->delete_shopping_cart($id_so);
    redirect('marketing/sales_order');
  }
}


/* End of file Sales_order.php */
/* Location: ./application/controllers/Sales_order.php */
