<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('marketing/sales_order_model');
		$this->load->model('marketing/customer_model');
		$this->load->model('marketing/stock_barang_model');
	}

	public function index()
	{	
		// variabel ini cuma tes saja
		$tahun = '2019';
		$jenis_customer = array('Personal', 'Distributor', 'Retailer');

		// hitung sales order tiap buan pada tahun $tahun
    	for($bulan=1; $bulan<=12; $bulan++){
    		$data['sales_order'][$bulan] = $this->sales_order_model->countSalesOrder($bulan, $tahun);
    	}
    	$data['bulan'] = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');// buat chart si sales order
		// print_r($data['sales_order']);
		// exit();

    	// ambil jumlah stock barang dengan namanya
    	$data['stock_barang'] = $this->stock_barang_model->getJumlahStok();
    	// foreach($data['stock_barang'] as $v){
    	// 	foreach ($v as $k){
    	// 		echo($k);
    	// 		echo(' | ');
    	// 	}
    	// 	echo('<br/>');
    	// }
    	// print_r($data['stock_barang']);
    	// exit();

    	// hitung jumlah distributor dan jenisnya dan hitung
    	foreach($jenis_customer as $v){
			$data['customer'][$v] = $this->customer_model->countCustomer($v);
    	}
		// print_r($data['customer']);
		// exit();

		$this->load->view('marketing/dashboard_v', $data);
	}
}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
