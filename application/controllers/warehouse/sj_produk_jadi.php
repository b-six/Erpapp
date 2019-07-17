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

  public function inputSjdpj()
  {
      $no_surat_jalan_dpj = $this->input->post('no_surat_jalan_dpj');
      $id_barang = $this->input->post('id_barang');
      $nama_distributor = $this->input->post('nama_distributor');
      $tgl_surat_jalan_dpj = $this->input->post('tgl_surat_jalan_dpj');
      $sales_order = $this->input->post('id_so');

    $this->Surat_jalan_model->tambah_data_dpj($no_surat_jalan_dpj, $id_barang, $nama_distributor, $tgl_surat_jalan_dpj, $sales_order);
    redirect('warehouse/sj_produk_jadi');
  }
  public function deleteDataSjdpj(){
    // $id_sjdpj_delete = $this->input->get('id_sjdpj_delete');
    echo $this->input->get('id_sjdpj_delete');
    exit();
    $this->Surat_jalan_model->delete_data_sjdpj($id_sjdpj_delete);
    redirect('warehouse/sj_produk_jadi');
  }


}


/* End of file Production_order.php */
/* Location: ./application/controllers/Production_order.php */