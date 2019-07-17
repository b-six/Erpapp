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
    $this->load->model('warehouse/Penerimaan_barang_baku_model');
  }

  public function index()
  {
    // $data['production_order'] = $this->production_order_model->get_production_order();
    $data['bahan_baku_masuk'] = $this->Bahan_baku_model->get_bahan_baku_masuk();
    $data['supplier'] = $this->Bahan_baku_model->get_supplier();
    $data['bahan_baku'] = $this->Bahan_baku_model->get_bahan_baku();
    $data['retur_bahan_baku'] = $this->Penerimaan_barang_baku_model->get_retur_bahan_baku();

    $this->load->view('warehouse/penerimaan_v',$data);
  }

function save_retur_bahan_baku()
  {
   
    
     $id_retur = $this->input->post('id-retur');
    $id_bahan_baku= $this->input->post('id-bahan-baku');
    $jml_bahan_baku = $this->input->post('jml-bahan-baku');
    $id_supplier= $this->input->post('id_supplier');
     $alasan= $this->input->post('alasan');
     
    $this->Penerimaan_barang_baku_model->save_retur_bahan_baku($id_retur, $id_bahan_baku, $jml_bahan_baku, $id_supplier, $alasan);

    redirect('warehouse/penerimaan');
  }

  
  // function delete_bahan_baku_masuk()
  // {
  //   $id_so = $this->input->get('id_bahan_baku_masuk_delete');
  //   $this->sales_order_model->delete_bahan_baku_masuk($id_so);
  //   $this->sales_order_model->delete_shopping_cart($id_so);
  //   redirect('marketing/sales_order');
  // }
}






/* End of file Production_order.php */
/* Location: ./application/controllers/Production_order.php */