<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Controller Promo
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

class Laporan_biaya_produksi extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('produksi/laporan_biaya_produksi_v');
    
  }

}


/* End of file Promo.php */
/* Location: ./application/controllers/Promo.php */