<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Controller Buat_planning
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

class Buat_planning extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('produksi/sales_order_model');
    $this->load->model('produksi/customer_model');
    $this->load->model('produksi/buat_planning_model');
    $this->load->model('produksi/production_order_model');
  }

  public function index()
  {
    $data['production_order'] = $this->production_order_model->get_production_order();
    $data['sales_order'] = $this->sales_order_model->get_sales_order();
    $data['customer'] = $this->customer_model->get_customer();
    $data['pp'] = $this->buat_planning_model->get_perencanaan_produksi();
    $this->load->view('produksi/buat_planning_v', $data);
  }
  /** $id_bb, $bahan_bb, $jadwal_bb,$po_bb,$pegawai_bb
  */
  function save_perencanaan_produksi(){
    $id_perencanaan_produksi = $this->input->post('id_perencanaan_produksi');
    $id_bahan_baku_produksi = $this->input->post('id_bahan_baku_produksi');
    $jadwal_perencanaan = $this->input->post('jadwal_perencanaan');
    $id_po = $this->input->post('id_po');
    $id_pegawai = $this->input->post('id_pegawai');
    $this->buat_planning_model->save_perencanaan_produksi($id_perencanaan_produksi, $id_bahan_baku_produksi, $jadwal_perencanaan,$id_po,$id_pegawai);
    redirect(base_url('produksi/buat_planning'));
  }

}


/* End of file Sales_order.php */
/* Location: ./application/controllers/Sales_order.php */