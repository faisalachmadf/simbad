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

    public function ambil_semua_katkabkota()
    {
        $query = $this->db->get('katkabkot');

        return $query->result();
    }


/*
public function get_by_role()
  {
      $this->db->select('
          tbl_user.*, tbl_role.id AS id_role, tbl_role.name
      ');
      $this->db->join('tbl_role', 'tbl_user.id_role = tbl_role.id');
      $this->db->from('tbl_user');
      $query = $this->db->get();
      return $query->result();
  }*/

    public function get_data()
    {

        $this->db->select('kabkota.*, katkabkot.id AS katkabkot_id, katkabkot.kabkot, katkabkot.logo');
        $this->db->join('katkabkot', 'kabkota.katkabkot_id = katkabkot.id', 'left');
        $this->db->from('kabkota');
        $this->db->order_by('kabkota.created_at','DESC');
        $query = $this->db->get();
              return $query->result();
    }


    public function insert_data()
    {

        $data = [
            "katkabkot_id" => $this->input->post('katkabkot_id', true),
            "batas" => $this->input->post('batas', true),
            "aturan" => $this->input->post('aturan', true),
            "file"              => $this->upload->data('file_name'),
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
        $query = $this->db->get('kabkota');
        $row = $query->row();
        unlink("./assets/segmenkabkota/$row->file");
        $this->db->delete('kabkota', array('id' => $id));
        return true;

      
    }
}