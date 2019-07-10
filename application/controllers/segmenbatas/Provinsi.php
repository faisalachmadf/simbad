<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi extends CI_Controller {


	public function index()
	{
		$data['title'] = 'Sistem Informasi Batas Daerah Provinsi';
		$this->load->view('frontend/template/v_header', $data );
		$this->load->view('frontend/segmenbatas/v_segmenbatas_provinsi.php');
		$this->load->view('frontend/template/v_footer');
	}
}
