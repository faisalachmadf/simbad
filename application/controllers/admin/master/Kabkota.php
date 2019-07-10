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
        $this->load->library('form_validation');
        $this->load->model('M_katkabkot');
        /*$this->load->model('M_katprovinsi');*/
	}

	public function index()
	{
		$data['title'] = 'Master Kabupaten/Kota ';
		$data['judul'] = 'Master Kabupaten/Kota';

		/*$data['permendagri'] = $this->M_katkabkot->getAllProvinsi();*/
        $this->load->view('admin/template/v_header', $data);
        $this->load->view('admin/template/v_menu');
        $this->load->view('admin/template/v_navbar', $data);
        $this->load->view('admin/master/v_kabkota', $data);
        
	}

	public function get_data(){
		$draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));

        $kabkota = $this->M_katkabkot->get_data();
			
          $data = array();
		  $num=0;
          foreach($kabkota->result() as $kk) {
			$num=$num+1;
			
               $data[] = array(
				   $num,
                   $kk->kabkot,
					'<a href="' . base_url('admin/master/Kabkota/edit')."/".$kk->id . '" title="Ubah"><i class="fas fa-edit"></i></a>'.'  
					'.'<a href="' . base_url('admin/master/Kabkota/delete')."/".$kk->id . '" title="hapus" onclick="return confirm(\'Anda yakin hapus data ini?\') ;"><i class="fas fa-trash text-danger"></i></a>',
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
		$data['judul'] = 'Tambah Kab/Kota';
		$data['title'] = 'Tambah Kab/Kota';

		$this->form_validation->set_rules('kabkot', 'kab/kota', 'trim|required|min_length[3]');

		if ($this->form_validation->run() == FALSE)
        {

            $this->load->view('admin/template/v_header', $data);
	        $this->load->view('admin/template/v_menu');
	        $this->load->view('admin/template/v_navbar');
			$this->load->view('admin/master/v_kabkota_add');
			$this->load->view('admin/template/v_footer', $data);
        
        }
        else
        {
            $this->M_katkabkot->insert_data();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('admin/master/Kabkota');
        }
		
	}

	public function edit($id)
	{
		$data['judul'] = 'Ubah ';
		$data['title'] = 'Ubah Segmen Batas Provinsi';
		$data['kabkota'] = $this->M_katkabkot->get_by_id($id);
		/*$data['nomor'] = ['Prov. Jawa Barat dengan Prov. DKI Jakarta', 'Prov. Jawa Barat dengan Prov. Banten', 'Prov. Jawa Barat dengan Prov. Jawa Tengah'];*/

		$this->form_validation->set_rules('kabkot', 'kab/kota', 'trim|required|min_length[3]');

		if ($this->form_validation->run() == FALSE)
        {

            $this->load->view('admin/template/v_header', $data);
	        $this->load->view('admin/template/v_menu');
	        $this->load->view('admin/template/v_navbar');
			$this->load->view('admin/master/v_kabkota_edit', $data);
			$this->load->view('admin/template/v_footer');
        
        }
        else
        {
            $this->M_katkabkot->update_data();
            $this->session->set_flashdata('flash', 'Dirubah');
            redirect('admin/master/Kabkota');
        }
		
	}

	public function delete($id)
	{
		$this->M_katkabkot->delete_data($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/master/Kabkota');
	}

	
	
}