<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Controller Data_customer
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

class Data_customer extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('produksi/customer_model');
  }

  public function index()
  {
    $data['customer'] = $this->customer_model->get_customer();
    $this->load->view('produksi/data_customer_v', $data);
  }

  function save_customer()
  {
    $id_pelanggan = $this->input->post('id_pelanggan');
    $nama_pelanggan = $this->input->post('nama_pelanggan');
    $tipe_customer = $this->input->post('tipe_customer');
    $wilayah = $this->input->post('wilayah');
    $this->customer_model->save_customer($id_pelanggan, $nama_pelanggan, $tipe_customer, $wilayah);
    redirect('produksi/data_customer');
  }

}


/* End of file Data_customer.php */
/* Location: ./application/controllers/Data_customer.php */