<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Controller Stok_produk
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

class Laporan_produksi extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('produksi/laporan_produksi_v');
  }

}


/* End of file Stok_produk.php */
/* Location: ./application/controllers/Stok_produk.php */