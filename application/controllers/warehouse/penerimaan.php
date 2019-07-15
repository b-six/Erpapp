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

class penerimaan extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('warehouse/Bahan_baku_model');
  }

  public function index()
  {
    // $data['production_order'] = $this->production_order_model->get_production_order();
    $data['bahan_baku_masuk'] = $this->Bahan_baku_model->get_bahan_baku_masuk();
    $data['supplier'] = $this->Bahan_baku_model->get_supplier();
    $data['bahan_baku'] = $this->Bahan_baku_model->get_bahan_baku();
    $this->load->view('warehouse/penerimaan_v',$data);
  }


}


/* End of file Production_order.php */
/* Location: ./application/controllers/Production_order.php */