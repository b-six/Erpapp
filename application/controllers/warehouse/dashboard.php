<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Controller Dashboard
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

class Dashboard extends CI_Controller
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
    $data['produk_jadi_keluar'] = $this->Stock_barang_model->get_produk_jadi_keluar();
    $this->load->view('warehouse/dashboard_v',$data);
    // foreach ($data['stock_barang']->result() as $value) {
    // 	echo $value->id_barang;
    // }
  }

}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */