<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin', 'ADM', TRUE);
		$this->load->model('M_config', 'CONF', TRUE);
	}
	
	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$where_admin['admin_user']		= $this->session->userdata('admin_user');
			$data['admin']					= $this->ADM->get_admin('',$where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			$data['dashboard_info']			= TRUE;
			$data['breadcrumb']				= 'Dashboard';
			$data['dashboard']				= 'admin/dashboard/statistik';
			$data['content']				= 'admin/dashboard/statistik';
			$where_masuk['status_pergerakan'] 	= 1;
			$where_keluar['status_pergerakan'] 	= 2;
			$data['jml_data_transaksi_masuk']	= $this->ADM->count_all_transaksi($where_masuk, '');
			$data['jml_data_transaksi_keluar']	= $this->ADM->count_all_transaksi($where_keluar, '');
			$data['menu_terpilih']			= '1';
			$data['submenu_terpilih']		= '1';
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("login");
		}
	 }
}