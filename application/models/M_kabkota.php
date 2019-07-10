<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kabkota extends CI_Model {

	public function __construct()
	{
		parent::__construct();
        $this->load->database('');
	}



    public function get_by_id($id)
    {

        return $this->db->get_where('kabkota', ['id' => $id])->row_array();
    }

    public function ambil_semua_kabkota()
    {
        $query = $this->db->get('katkabkot');

        return $query->result();
    }


    public function get_data()
    {

        $this->db->select('*');
        $this->db->from('kabkota');
        return $this->db->get();
    }

    public function insert_data()
    {

        $data = [
            "katkabkot_id" => $this->input->post('katkabkot_id', true),
            "batas" => $this->input->post('batas', true),
            "aturan" => $this->input->post('aturan', true),
            // File
            "created_at"        => date('Y-m-d H-i:s'),
        ];
        $this->db->insert('kabkota', $data);
        return true;
    }

    public function edit_data($id)
    {

        $this->db->select('*');
        $this->db->from('kabkota');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update_data()
    {

        $data = [
            "katkabkot_id" => $this->input->post('katkabkot_id', true),
            "batas" => $this->input->post('batas', true),
            "aturan" => $this->input->post('aturan', true),
            // File
            "created_at"        => date('Y-m-d H-i:s'),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kabkota', $data);
    }
    
    public function delete_data($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('kabkota');
        return true;
    }
}