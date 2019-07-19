<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kabkota extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
       /* //  Cek Sesi Login
        if ($this->session->userdata('is_logged') == '')
		redirect(base_url().'admin/Login');*/
        /*$this->load->library('form_validation');*/
        $this->load->model('M_kabkota');
        $this->load->model('M_katkabkot');
        $this->load->helper(array('form', 'url'));
        /*$this->load->model('M_katprovinsi');*/
	}


	public function index()
	{
		$data['title'] = 'Sistem Informasi Batas Daerah Kabupaten/Kota di Jawa Barat';
		$data['katkabkota'] = $this->M_katkabkot->get_data()->result();
		$data['segmenkabkota'] = $this->M_kabkota->get_data();

		$this->load->view('frontend/template/v_header', $data );
		$this->load->view('frontend/segmenbatas/v_segmenbatas_kabkota.php', $data);
		$this->load->view('frontend/template/v_footer');
	}

	public function kategori($katkatkabkot_id)
	{
		$data['title'] = 'Sistem Informasi Batas Daerah Kabupaten/Kota di Jawa Barat';
		$data['kategori'] = $this->M_kabkota->get_kabkota_by_katkabkot($katkatkabkot_id);

		$this->load->view('frontend/template/v_header', $data );
		$this->load->view('frontend/segmenbatas/v_segmenbatas_kabkota_kategori.php', $data);
		$this->load->view('frontend/template/v_footer');
	}


}
