<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_katkabkot extends CI_Model {

	public function __construct()
	{
		parent::__construct();
        $this->load->database('');
	}

   

    public function get_by_id($id)
    {   
        
        return $this->db->get_where('katkabkot', ['id' => $id])->row_array();
        
    }

     
    public function get_data(){
        
        $this->db->select('*');
        $this->db->from('katkabkot');
        return $this->db->get();
    }

    public function insert_data(){
          
        $data =[
            
            "kabkot" => $this->input->post('kabkot', true),
            "created_at"        => date('Y-m-d H-i:s'),
        ];
        $this->db->insert('katkabkot',$data);
        return true;
    }

    public function edit_data($id){
        
        $this->db->select('*');
        $this->db->from('katkabkot');
        $this->db->where('id',$id);
        $query=$this->db->get();
        return $query->result_array();
    }

   public function update_data(){
          
        $data =[
            "kabkot" => $this->input->post('kabkot', true),
                    // File
            "edited_at"        => date('Y-m-d H-i:s'),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('katkabkot', $data);
    }
    public function delete_data($id){
        
        $this->db->where('id', $id);
        $this->db->delete('katkabkot');
        return true;
    }
}