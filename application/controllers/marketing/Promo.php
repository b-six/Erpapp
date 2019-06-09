<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Promo extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('marketing/promo_v');
    
  }

}


/* End of file Promo.php */
/* Location: ./application/controllers/Promo.php */