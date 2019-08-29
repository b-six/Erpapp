<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}


	public function index()
	{
		$data['title'] = "ERP App - B Six";
		$this->load->view('home_v', $data);
	}

	function login()
	{
		$modul = $_GET['modul'];
		$data['title'] = "ERP App - Login Page";
		$data['modul'] = $modul;
		$this->load->view('login_page_v', $data);
	}

	function login_user()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$modul = $this->input->post('modul_name');
		$modul = strtolower($modul);
		$data['admin'] = $this->admin_model->get_admin();
		$masuk = 0;
		foreach ($data['admin']->result() as $adm) :
		if($adm->username == $username && $adm->password == $password && $adm->modul == $modul)
		{
			$masuk++;
			$arraydata = array(
				'nama' => $adm->nama,
				'modul_name' => $adm->modul,
				'status' => '1',
				'level' => $adm->level
			);
			$this->session->set_userdata($arraydata);

		}
		endforeach;
		if($modul=='hrd' && $masuk>0){
			redirect('sdm/dashboard');
			exit();
		}
		if ($modul=='finance' && $masuk>0){
			
			header('location: ../../ERPapp-finance');
			exit();
		}
		if($masuk >0)
		{
			redirect(''.$modul.'/dashboard');
		}
		else
		{
			// redirect('welcome/login');
			redirect('welcome/login?modul='.ucfirst($modul).'&login=0');
		}
	}

	function log_out()
	{
		$arraydata = array(
			'nama',
			'modul_name',
			'status',
			'level'
		);
		$this->session->unset_userdata($arraydata);
		redirect('welcome');
	}
}
