<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Controller Sales_order
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

class Sales_order extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('produksi/sales_order_model');
    $this->load->model('produksi/customer_model');
  }

  public function index()
  {
    $data['sales_order'] = $this->sales_order_model->get_sales_order();
    $data['customer'] = $this->customer_model->get_customer();
    $this->load->view('produksi/sales_order_v', $data);
  }

  function save_sales_order()
  {
    $id_so = $this->input->post('id_so');
    $id_pelanggan = $this->input->post('id_pelanggan');
    $this->sales_order_model->save_sales_order($id_so, $id_pelanggan);
    redirect('produksi/sales_order');
  }

}


/* End of file Sales_order.php */
/* Location: ./application/controllers/Sales_order.php */