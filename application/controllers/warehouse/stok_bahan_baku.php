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

class stok_bahan_baku extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('warehouse/Bahan_baku_model');
  }

  public function index()
  {
    $data['bahan_baku'] = $this->Bahan_baku_model->get_bahan_baku();
    $data['supplier'] = $this->Bahan_baku_model->get_supplier();
    $data['bahan_baku_masuk'] = $this->Bahan_baku_model->get_bahan_baku_masuk();
    $data['bahan_baku_keluar'] = $this->Bahan_baku_model->get_bahan_baku_keluar();
    $data['surat_jalan_pengiriman_bahan_baku'] = $this->Bahan_baku_model->get_surat_jalan_pengiriman_bahan_baku();
    $this->load->view('warehouse/stok_bahan_baku_v',$data);
  }


}


/* End of file Production_order.php */
/* Location: ./application/controllers/Production_order.php */