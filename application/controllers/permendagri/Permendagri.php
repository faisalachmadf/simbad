<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permendagri extends CI_Controller {


	public function index()
	{
		$data['title'] = 'Sistem Informasi Batas Daerah Provinsi';
		$this->load->view('frontend/template/v_header', $data );
		$this->load->view('frontend/permendagri/v_permendagri.php');
		$this->load->view('frontend/template/v_footer');
	}
}
	