<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Controller Testimoni
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

class Testimoni extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('marketing/testimoni_v');
    
  }

}


/* End of file Testimoni.php */
/* Location: ./application/controllers/Testimoni.php */