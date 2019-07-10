<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kabkota extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Sistem Informasi Batas Daerah Kabupaten/Kota di Jawa Barat';
		
		$this->load->view('frontend/template/v_header', $data );
		$this->load->view('frontend/segmenbatas/v_segmenbatas_kabkota.php');
		$this->load->view('frontend/template/v_footer');
	}
}
