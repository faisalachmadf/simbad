<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
        //  Cek Sesi Login
        if ($this->session->userdata('is_logged') == '')
		redirect(base_url().'admin/Login');
        $this->load->library('form_validation');
        $this->load->model('M_user');
        /*$this->load->model('M_katprovinsi');*/
	}

	public function index()
	{
		$data['title'] = 'Master User ';
		$data['judul'] = 'Master User';

		/*$data['permendagri'] = $this->M_user->getAllProvinsi();*/
        $this->load->view('admin/template/v_header', $data);
        $this->load->view('admin/template/v_menu');
        $this->load->view('admin/template/v_navbar', $data);
        $this->load->view('admin/master/v_user', $data);
        
	}

	public function get_data(){
		$draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));

        $user = $this->M_user->get_data();
			
          $data = array();
		  $num=0;
          foreach($user->result() as $u) {
			$num=$num+1;
			
               $data[] = array(
				   $num,
                   $u->nama,
                   $u->jabatan,
                   $u->telepon,
                   $u->username,
                   $u->role,
					'<a href="' . base_url('admin/master/User/edit')."/".$u->user_id . '"  title="Ubah"><i class="fas fa-edit"></i></a>'.'  
					'.'<a href="' . base_url('admin/master/User/delete')."/".$u->user_id . '" title="hapus" onclick="return confirm(\'Anda yakin hapus data ini?\') ;"><i class="fas fa-trash text-danger"></i></a>',
				/*	<?=base_url('admin/suratkeluar/Suratkeluar2/datatable')?>*/
               );
          }

          $output = array(
               "draw" => $draw,
               "recordsTotal" => $user->num_rows(),
               "recordsFiltered" => $user->num_rows(),
               "data" => $data

            );
          echo json_encode($output);
          exit();
	}



	public function add()
	{
		$data['judul'] = 'Tambah User';
		$data['title'] = 'Tambah User';

		$this->form_validation->set_rules('kabkot', 'kab/kota', 'trim|required|min_length[3]');

		if ($this->form_validation->run() == FALSE)
        {

            $this->load->view('admin/template/v_header', $data);
	        $this->load->view('admin/template/v_menu');
	        $this->load->view('admin/template/v_navbar');
			$this->load->view('admin/master/v_user_add');
			$this->load->view('admin/template/v_footer', $data);
        
        }
        else
        {
            $this->M_user->insert_data();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('admin/master/User');
        }
		
	}

	public function edit($id)
	{
		$data['judul'] = 'Ubah ';
		$data['title'] = 'Ubah Segmen Batas Provinsi';
		$data['kabkota'] = $this->M_user->get_by_id($id);
		/*$data['nomor'] = ['Prov. Jawa Barat dengan Prov. DKI Jakarta', 'Prov. Jawa Barat dengan Prov. Banten', 'Prov. Jawa Barat dengan Prov. Jawa Tengah'];*/

		$this->form_validation->set_rules('kabkot', 'kab/kota', 'trim|required|min_length[3]');

		if ($this->form_validation->run() == FALSE)
        {

            $this->load->view('admin/template/v_header', $data);
	        $this->load->view('admin/template/v_menu');
	        $this->load->view('admin/template/v_navbar');
			$this->load->view('admin/master/v_user_edit', $data);
			$this->load->view('admin/template/v_footer');
        
        }
        else
        {
            $this->M_user->update_data();
            $this->session->set_flashdata('flash', 'Dirubah');
            redirect('admin/master/User');
        }
		
	}

	public function delete($id)
	{
		$this->M_user->delete_data($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/master/User');
	}

	
	
}