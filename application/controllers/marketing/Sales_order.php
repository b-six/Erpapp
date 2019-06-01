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
  }

  public function index()
  {
    $this->load->view('marketing/sales_order_v');
  }

}


/* End of file Sales_order.php */
/* Location: ./application/controllers/Sales_order.php */