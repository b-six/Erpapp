<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Controller Produk_baru
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

class Laporan_perbaikan_produk extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('produksi/Laporan_perbaikan_produk_v');
    
  }

}


/* End of file Produk_baru.php */
/* Location: ./application/controllers/Produk_baru.php */