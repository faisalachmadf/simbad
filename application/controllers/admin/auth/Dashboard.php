<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // {c} Cek Sesi Login
        if ($this->session->userdata('is_logged') == '')
		redirect(base_url().'admin/Login');

        $this->load->library('session');
        $this->load->helper('url');
        
      /*  // {c} Load Template Admin
        $this->load->library('template_admin');*/
    }

    
	public function index() {
		
		$data['admin'] = 'Admin';

		$data['title'] = 'Dashboard';

		// {c} print "<pre>"; print_r($this->session->userdata()); exit;
		
		/*$this->template_admin->display('admin/common/v_dashboard', $data);*/

		
		$this->load->view('admin/template/v_header', $data);
		$this->load->view('admin/template/v_menu', $data);
		$this->load->view('admin/template/v_navbar');
		$this->load->view('admin/auth/v_dashboard', $data);
		$this->load->view('admin/template/v_footer', $data);
	}

}