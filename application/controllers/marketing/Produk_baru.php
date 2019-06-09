<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_baru extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('marketing/produk_baru_v');
    
  }

}


/* End of file Produk_baru.php */
/* Location: ./application/controllers/Produk_baru.php */