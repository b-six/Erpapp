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

class penyimpanan extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('warehouse/Stock_barang_model');
  }

  public function index()
  {
    $data['stock_barang'] = $this->Stock_barang_model->get_stock_barang();
    $data['produk_jadi_masuk'] = $this->Stock_barang_model->get_produk_jadi_masuk();
    $this->load->view('warehouse/penyimpanan_v',$data);
  }


}


/* End of file Production_order.php */
/* Location: ./application/controllers/Production_order.php */