<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Controller Production_order
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

class sales_order extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('warehouse/Sales_order_model');
  }

  public function index()
  {
    $data['sales_order'] = $this->Sales_order_model->get_sales_order();
    $data['customer'] = $this->Sales_order_model->get_customer();
    $this->load->view('warehouse/sales_order_v', $data);
  }

}


/* End of file Production_order.php */
/* Location: ./application/controllers/Production_order.php */