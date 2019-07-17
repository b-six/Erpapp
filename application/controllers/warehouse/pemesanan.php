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

class pemesanan extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('warehouse/Pemesanan_bb_model');
    $this->load->model('warehouse/Bahan_baku_model');

  }

  public function index()
  {
    // $data['production_order'] = $this->production_order_model->get_production_order();
    $data['bahan_baku'] = $this->Bahan_baku_model->get_bahan_baku();
    $data['supplier'] = $this->Bahan_baku_model->get_supplier();
    $data['pemesanan_bb'] = $this->Pemesanan_bb_model->get_pemesanan_bb();
    $this->load->view('warehouse/pemesanan_v', $data);
  }

function save_pemesanan()
  {
    $id_pemesanan_bb = $this->input->post('id_pemesanan_bb');
    $id_bahan_baku = $this->input->post('id-bahan-baku');
    $jumlah = $this->input->post('jmlbb');
    $id_supplier = $this->input->post('id-supplier');
    $tanggal_pengiriman = $this->input->post('tglkirim');
    $status = $this->input->post('status');
    $this->Pemesanan_bb_model->save_pemesanan($id_pemesanan_bb, $id_bahan_baku, $jumlah, $id_supplier, $tanggal_pengiriman, $status);
    redirect('warehouse/pemesanan');
  }

  function pesan()
  { 
    $id_pemesanan_bb = $this->input->get("id");
    $status = "Dipesan";
    $this->Pemesanan_bb_model->update_status($status, $id_pemesanan_bb);
   redirect('warehouse/pemesanan');

  }

function delete()
  { 
    $id_pemesanan_bb = $this->input->get("id");
    $this->Pemesanan_bb_model->delete($id_pemesanan_bb);
   redirect('warehouse/pemesanan');

  }
    
}


/* End of file Production_order.php */
/* Location: ./application/controllers/Production_order.php */