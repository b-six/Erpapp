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

class pengiriman extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('warehouse/Stock_barang_model');
  }

  public function index()
  {
    $data['stock_barang'] = $this->Stock_barang_model->get_stock_barang();
    $data['customer'] = $this->Stock_barang_model->get_customer();
    $data['produk_jadi_keluar'] = $this->Stock_barang_model->get_produk_jadi_keluar();
    $this->load->view('warehouse/pengiriman_v',$data);
  }

  public function inputPjk(){
    $id_produk_keluar = $this->input->post('id_produk_keluar');
    $id_barang = $this->input->post('id_barang');
    $id_pelanggan = $this->input->post('id_pelanggan');
    $jml_produk_keluar = $this->input->post('jml_produk_keluar');
    $tgl_produk_keluar = $this->input->post('tgl_produk_keluar');

    $this->Stock_barang_model->tambah_data_pjk($id_produk_keluar, $id_barang, $id_pelanggan, $jml_produk_keluar, $tgl_produk_keluar);
    redirect('warehouse/pengiriman');

  }

  public function deleteDataPjk(){
    // $id_produk_jadi_masuk = $this->input->get('id_produk_jadi_masuk_delete');
    $id_pjk_delete = $this->input->get('id_pjk_delete');
    $this->Stock_barang_model->delete_data_pjk($id_pjk_delete);
    redirect('warehouse/pengiriman');
  }
}


/* End of file Production_order.php */
/* Location: ./application/controllers/Production_order.php */