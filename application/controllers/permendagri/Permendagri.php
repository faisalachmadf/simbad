<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permendagri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
       /* //  Cek Sesi Login
        if ($this->session->userdata('is_logged') == '')
		redirect(base_url().'admin/Login');*/
        /*$this->load->library('form_validation');*/
        $this->load->model('M_permendagri');
        $this->load->helper(array('form', 'url'));
        /*$this->load->model('M_katprovinsi');*/
	}

	public function index()
	{
		$data['title'] = 'Sistem Informasi Batas Daerah Provinsi';
		$data['permen'] = $this->M_permendagri->get_data()->result();

		$this->load->view('frontend/template/v_header', $data );
		$this->load->view('frontend/permendagri/v_permendagri.php', $data);
		$this->load->view('frontend/template/v_footer');
	}
}
