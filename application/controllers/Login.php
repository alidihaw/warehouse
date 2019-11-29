<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login', 'LOG', TRUE);
		$this->load->model('M_admin', 'ADM', TRUE);
		$this->load->model('M_config', 'CONF', TRUE);
	}
	
	public function index()
	{
		if($this->session->userdata('logged_in') == FALSE) {
			$data['web']	= $this->ADM->identitaswebsite();
			$this->load->vars($data);
			$this->load->view('admin/login');
		} else {
			redirect("admin");
		}
	}
	
	public function ceklogin()
	{
		$username		= validasi_sql($this->input->post('username'));
		$password		= validasi_sql($this->input->post('password'));
		$do				= validasi_sql($this->input->post('masuk'));
		
		$where_login['admin_user']	= $username;
		$where_login['admin_pass']	= do_hash($password, 'md5');
		
		date_default_timezone_set('Asia/Jakarta');
		
		if ($this->LOG->cek_login($where_login) === TRUE){
			redirect("admin/");
		} else {
			?>
            <script>alert('Usename dan Password tidak cocok!');top.window.location="<?php echo site_url();?>login/keluar";</script>
            <?php
		}
		
	}
	
	public function keluar()
	{
		$this->LOG->remov_session();
		redirect("login");
	}
}