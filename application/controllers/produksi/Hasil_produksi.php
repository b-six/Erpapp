<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Controller Hasil_produksi
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

class Hasil_produksi extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('produksi/hasil_produksi_model');
  }

  public function index()
  {
    $data['hasil_produksi'] = $this->hasil_produksi_model->get_hasil_produksi_model();
    $this->load->view('produksi/hasil_produksi_v', $data);
  }

  function save_hasil_produksi()
  {
    $id_hasil_produksi = $this->input->post('id_hasil_produksi');
    $jumlah_produksi = $this->input->post('jumlah_produk');
    $jenis_barang = $this->input->post('jenis_barang');
    $nama_barang = $this->input->post('nama_barang');
    $tanggal = $this->input->post('tanggal');
    $keterangan_barang = $this->input->post('keterangan');
    $this->hasil_produksi_model->save_hasil_produksi($id_hasil_produksi, $jumlah_produksi, $jenis_barang, $nama_barang, $tanggal, $keterangan_barang);
    redirect('produksi/hasil_produksi');
  }

}


/* End of file Production_order.php */
/* Location: ./application/controllers/Production_order.php */