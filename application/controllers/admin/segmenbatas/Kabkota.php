<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kabkota extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
        //  Cek Sesi Login
        if ($this->session->userdata('is_logged') == '')
		redirect(base_url().'admin/Login');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('M_kabkota');
        $this->load->model('M_katkabkot');
        /*$this->load->model('M_katprovinsi');*/
	}

	public function index()
	{
		$data['title'] = 'Segmen Batas Kabupaten/Kota';
		$data['judul'] = 'Segmen Batas Kabupaten/Kota';
		$data['kabkotas']  = $this->M_kabkota->ambil_semua_kabkota();

		/*$data['provinsi'] = $this->M_kabkota->getAllProvinsi();*/
		$this->load->view('admin/template/v_header', $data);
		$this->load->view('admin/template/v_menu');
		$this->load->view('admin/template/v_navbar', $data);
		$this->load->view('admin/segmenbatas/v_kabkota', $data);
	}

	public function get_data(){
		$draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));

        $kabkota = $this->M_kabkota->get_data();
			
          $data = array();
		  $num=0;
          foreach($kabkota->result() as $kk) {
			$num=$num+1;

			$data[] = array(
				$num,
				$kk->katkabkot_id,
				/*  '<a href="' . base_url('admin/segmenbatas/Kabkota/detail')."/".$kk->id .'">' .*/
				$kk->batas . '</a>',
				$kk->aturan,
				'<a href="' . base_url('admin/segmenbatas/Kabkota/edit') . "/" . $kk->id . '" title="Ubah"><i class="fas fa-edit"></i></a>' . '  
					' . '<a href="' . base_url('admin/segmenbatas/Kabkota/delete') . "/" . $kk->id . '" title="hapus" onclick="return confirm(\'Anda yakin hapus data ini?\') ;"><i class="fas fa-trash text-danger"></i></a>',
				/*	<?=base_url('admin/suratkeluar/Suratkeluar2/datatable')?>*/
			);
          }

          $output = array(
               "draw" => $draw,
               "recordsTotal" => $kabkota->num_rows(),
               "recordsFiltered" => $kabkota->num_rows(),
               "data" => $data

            );
          echo json_encode($output);
          exit();
	}

	public function add()
	{
		$data['judul'] = 'Tambah';
		$data['title'] = 'Tambah Segmen Batas Kabupaten/Kota';
		$data['kabkotas']  = $this->M_kabkota->ambil_semua_kabkota();

		$this->form_validation->set_rules('katkabkot_id', 'Kabupaten/Kota Perbatasan', 'required');
		$this->form_validation->set_rules('batas', 'Kabupaten/Kota Batas', 'trim|required|min_length[3]|max_length[255]');
		$this->form_validation->set_rules('aturan', 'Aturan', 'trim|required|min_length[3]');
		/*$this->form_validation->set_rules('file', 'File', 'trim|required|min_length[3]');*/

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('admin/template/v_header', $data);
			$this->load->view('admin/template/v_menu', $data);
			$this->load->view('admin/template/v_navbar', $data);
			$this->load->view('admin/segmenbatas/v_kabkota_add');
			$this->load->view('admin/template/v_footer');
		} else {
			$this->M_kabkota->insert_data();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('admin/segmenbatas/Kabkota');
		}
		
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail';
		$data['title'] = 'Detail Segmen Batas Kabupaten/Kota';

		$this->load->view('admin/template/v_header', $data);
	    $this->load->view('admin/template/v_menu');
	    $this->load->view('admin/template/v_navbar');
		$this->load->view('admin/segmenbatas/v_kabkota_detail', $data);
		$this->load->view('admin/template/v_footer');
	}

	public function edit($id)
	{
		$data['judul'] = 'Ubah ';
		$data['title'] = 'Ubah Segmen Batas Kabupaten/Kota';
		$data['kabkotapilih'] = $this->M_kabkota->get_by_id($id);
		$data['kabkotas']  = $this->M_kabkota->ambil_semua_kabkota($id);

		

		$this->form_validation->set_rules('katkabkot_id', 'Kabupaten/Kota Perbatasan', 'required');
		$this->form_validation->set_rules('batas', 'Kabupaten/Kota Batas', 'trim|required|min_length[3]|max_length[255]');
		$this->form_validation->set_rules('aturan', 'Aturan', 'trim|required|min_length[3]');
		/*$this->form_validation->set_rules('file', 'File', 'trim|required|min_length[3]');*/

		if ($this->form_validation->run() == FALSE)
        {

            $this->load->view('admin/template/v_header', $data);
	        $this->load->view('admin/template/v_menu');
	        $this->load->view('admin/template/v_navbar');
			$this->load->view('admin/segmenbatas/v_kabkota_edit', $data);
			$this->load->view('admin/template/v_footer');
        
        }
        else
        {
            $this->M_kabkota->update_data();
            $this->session->set_flashdata('flash', 'Dirubah');
            redirect('admin/segmenbatas/Kabkota');
        }
		
	}

	public function delete($id)
	{
		$this->M_kabkota->delete_data($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/segmenbatas/Kabkota');
	}

	public function validasi()
    {
        
        $this->form_validation->set_rules('kabkot', 'Kabupaten/Kota', 'trim|required|min_length[3]|max_length[255]');
		$this->form_validation->set_rules('aturan', 'Aturan', 'trim|required|min_length[3]|max_length[255]');
       
        
    }

	
}