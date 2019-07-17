<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *aa
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
    $this->load->library('session');
  }
  public function index()
  {
    $data['stock_barang'] = $this->Stock_barang_model->get_stock_barang();
    $data['produk_jadi_masuk'] = $this->Stock_barang_model->get_produk_jadi_masuk();
    $this->load->view('warehouse/penyimpanan_v',$data);
  }
  public function inputDataPjm()
  {
      $id_produk_jadi_masuk = $this->input->post('id_produk_jadi_masuk');
      $id_barang = $this->input->post('id_barang');
      $jml_barang_masuk = $this->input->post('jml_barang_masuk');
      $tgl_produk_masuk = $this->input->post('tgl_produk_masuk');

      $this->Stock_barang_model->tambah_data_pjm($id_produk_jadi_masuk, $id_barang, $jml_barang_masuk, $tgl_produk_masuk);
      redirect('warehouse/penyimpanan');
  }


}


/* End of file Production_order.php */
/* Location: ./application/controllers/Production_order.php */