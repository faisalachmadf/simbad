<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permendagri extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
        //  Cek Sesi Login
        if ($this->session->userdata('is_logged') == '')
		redirect(base_url().'admin/Login');
        $this->load->library('form_validation');
        $this->load->model('M_permendagri');
        /*$this->load->model('M_katprovinsi');*/
	}

	public function index()
	{
		$data['title'] = 'Permendagri Segmen Batas ';
		$data['judul'] = 'Permendagri Segmen Batas';

		/*$data['permendagri'] = $this->M_permendagri->getAllProvinsi();*/
        $this->load->view('admin/template/v_header', $data);
        $this->load->view('admin/template/v_menu');
        $this->load->view('admin/template/v_navbar', $data);
        $this->load->view('admin/permendagri/v_permendagri', $data);
        
	}

	public function get_data(){
		$draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));

        $permendagri = $this->M_permendagri->get_data();
			
          $data = array();
		  $num=0;
          foreach($permendagri->result() as $permen) {
			$num=$num+1;
			
               $data[] = array(
				   $num,
					'<a href="' . base_url('admin/permendagri/Permendagri/detail')."/".$permen->id .'">' .$permen->nomor. '</a>',
                    $permen->tentang,
					/*'<a href="' . base_url('admin/permendagri/Permendagri/detail')."/".$permen->id . '" class="btn btn-circle btn-warning" title="Detil"><i class="fas fa-bars"></i></a>'.' 
					'.*/
					'<a href="' . base_url('admin/permendagri/Permendagri/edit')."/".$permen->id . '" title="Ubah"><i class="fas fa-edit"></i></a>'.'  
					'.'<a href="' . base_url('admin/permendagri/Permendagri/delete')."/".$permen->id . '" title="hapus" onclick="return confirm(\'Anda yakin hapus data ini?\') ;"><i class="fas fa-trash text-danger"></i></a>',
				/*	<?=base_url('admin/suratkeluar/Suratkeluar2/datatable')?>*/
               );
          }

          $output = array(
               "draw" => $draw,
               "recordsTotal" => $permendagri->num_rows(),
               "recordsFiltered" => $permendagri->num_rows(),
               "data" => $data

            );
          echo json_encode($output);
          exit();
	}



	public function add()
	{
		$data['judul'] = 'Tambah Permendagri';
		$data['title'] = 'Tambah Permendagri Segmen Batas';

		$this->validasi();


		if ($this->form_validation->run() == FALSE)
        {

            $this->load->view('admin/template/v_header', $data);
	        $this->load->view('admin/template/v_menu');
	        $this->load->view('admin/template/v_navbar');
			$this->load->view('admin/permendagri/v_permendagri_add');
			$this->load->view('admin/template/v_footer', $data);
        
        }
        else
        {
  
			$config['upload_path']          = './assets/permendagri/';
	        $config['allowed_types']        = 'gif|jpg|png|pdf|PDF|doc|docx';

	        $this->load->library('upload', $config);

	        if(!$this->upload->do_upload('file_upload')) 
	        {
	        	echo $this->upload->display_errors();

	        } 
        	

            $this->M_permendagri->insert_data();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('admin/permendagri/Permendagri');
        }
		
	}


	public function detail($id)
	{
		$data = [
			'judul' => 'Detail',
			'title' => 'Detail Permendagri',
		];

		$data['permendagri'] = $this->M_permendagri->get_by_id($id);

		$this->load->view('admin/template/v_header', $data);
	    $this->load->view('admin/template/v_menu');
	    $this->load->view('admin/template/v_navbar');
		$this->load->view('admin/permendagri/v_permendagri_detail', $data);
		$this->load->view('admin/template/v_footer');
	}

	public function edit($id)
	{
		$data['judul'] = 'Ubah ';
		$data['title'] = 'Ubah Segmen Batas Provinsi';
		$data['permendagri'] = $this->M_permendagri->get_by_id($id);
		/*$data['nomor'] = ['Prov. Jawa Barat dengan Prov. DKI Jakarta', 'Prov. Jawa Barat dengan Prov. Banten', 'Prov. Jawa Barat dengan Prov. Jawa Tengah'];*/

		$this->validasi();

		if ($this->form_validation->run() == FALSE)
        {

            $this->load->view('admin/template/v_header', $data);
	        $this->load->view('admin/template/v_menu');
	        $this->load->view('admin/template/v_navbar');
			$this->load->view('admin/permendagri/v_permendagri_edit', $data);
			$this->load->view('admin/template/v_footer');
        
        }
        else
        {
        	// cek jika ada file yang akan diupload

        	$upload_file = $_FILES['file_upload']['name'];

        	if ($upload_file) {
        		$config['upload_path']          = './assets/permendagri/';
        		$config['allowed_types']        = 'pdf|PDF|doc|docx';
        		
        		$this->load->library('upload', $config);

        		if ($this->upload->do_upload('file_upload')) 
        		{

        			$new_file = $this->upload->data('file_name');
        			$this->db->set('file', $new_file);

        		} else {
        			echo $this->upload->display_errors();
        		}
        	}

            $this->M_permendagri->update_data();
            $this->session->set_flashdata('flash', 'Dirubah');
            redirect('admin/permendagri/Permendagri');
        }
		
	}

	public function delete($id)
	{
		$this->M_permendagri->delete_data($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/permendagri/Permendagri');
	}

	public function validasi()
	{
		$this->form_validation->set_rules('nomor', 'Nomor dan Tanggal Permendagri', 'required');
		$this->form_validation->set_rules('tentang', 'Tentang', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('segmen', 'Segmen', 'required|min_length[3]');
	}

	
}