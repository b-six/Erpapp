<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Controller Production_order
 *
 * This conq)   troller for ...
 *
 * @package   CodeIgniter
 * @category  Controller
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class production_order extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    // $data['production_order'] = $this->production_order_model->get_production_order();
    // $data['stock_barang'] = $this->stock_barang_model->get_stock_barang();
      $this->load->model('warehouse/production_order_model');
     $data['production_order'] = $this->production_order_model->get_production_order();
     $data['stock_barang'] = $this->production_order_model->get_stock_barang();
    $this->load->view('warehouse/production_order_v',$data);
  }


}


/* End of file Production_order.php */
/* Location: ./application/controllers/Production_order.php */