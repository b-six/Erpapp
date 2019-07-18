<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    // if user = 1 (manager) then
    // $this->load->view('sdm/manager/dashboard_v');
    // if user = 2 (hrd) then
     $this->load->view('sdm/hrd/dashboard_v');
    // else
    // $this->load->view('sdm/user/dashboard_v');

  }

}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */