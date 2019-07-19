<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('M_provinsi');
        $this->load->helper(array('form', 'url'));

	}

	public function index()
	{
		$data['title'] = 'Sistem Informasi Batas Daerah Provinsi';
		$data['segmenprov'] = $this->M_provinsi->get_data()->result();
		
		$this->load->view('frontend/template/v_header', $data );
		$this->load->view('frontend/segmenbatas/v_segmenbatas_provinsi.php', $data);
		$this->load->view('frontend/template/v_footer');
	}
}
