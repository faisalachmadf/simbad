<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_provinsi extends CI_Model {

	public function __construct()
	{
		parent::__construct();
        $this->load->database('');
	}

   

    public function get_by_id($id)
    {   
        
        return $this->db->get_where('provinsi', ['id' => $id])->row_array();
        
    }

     
    public function get_data(){
        
        $this->db->select('*');
        $this->db->from('provinsi');
        return $this->db->get();
    }

    public function insert_data(){
          
        $data =[
            "id_katprov" => $this->input->post('id_katprov', true),
            "kabkot" => $this->input->post('kabkot', true),
            "aturan" => $this->input->post('aturan', true),
                    // File
            "created_at"        => date('Y-m-d H-i:s'),
        ];
        $this->db->insert('provinsi',$data);
        return true;
    }

    public function edit_data($id){
        
        $this->db->select('*');
        $this->db->from('provinsi');
        $this->db->where('id',$id);
        $query=$this->db->get();
        return $query->result_array();
    }

   public function update_data(){
          
        $data =[
            "id_katprov" => $this->input->post('id_katprov', true),
            "kabkot" => $this->input->post('kabkot', true),
            "aturan" => $this->input->post('aturan', true),
                    // File
            "created_at"        => date('Y-m-d H-i:s'),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('provinsi', $data);
    }
    public function delete_data($id){
        
        $this->db->where('id', $id);
        $this->db->delete('provinsi');
        return true;
    }
}