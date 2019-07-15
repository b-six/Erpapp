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

class sj_produk_jadi extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('warehouse/Sales_order_model');
    $this->load->model('warehouse/Stock_barang_model');
    $this->load->model('warehouse/Surat_jalan_model');
    $this->load->model('warehouse/Bahan_baku_model');
  }

  public function index()
  {
    $data['sales_order'] = $this->Sales_order_model->get_sales_order();
    $data['surat_jalan_distribusi_produk_jadi'] = $this->Surat_jalan_model->get_surat_jalan_distribusi_produk_jadi();
    $data['stock_barang'] = $this->Stock_barang_model->get_stock_barang();
    $this->load->view('warehouse/sj_produk_jadi_v',$data);
  }


}


/* End of file Production_order.php */
/* Location: ./application/controllers/Production_order.php */