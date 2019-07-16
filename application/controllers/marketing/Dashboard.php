<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('status') == NULL) {
      redirect('welcome');
    }
  }

  public function index()
  {
    if ($this->session->userdata('status') == '1') {
      $this->load->view('marketing/dashboard_v');
    } else {
      // redirect('welcome/login');
      redirect('welcome/login?modul=' . ucfirst($this->session->userdata('status')) . '&login=0');
    }
  }
}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
