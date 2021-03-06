<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sales_order extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('marketing/sales_order_model');
    $this->load->model('marketing/customer_model');
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

}


/* End of file Sales_order.php */
/* Location: ./application/controllers/Sales_order.php */