<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftar extends CI_Model {

	public function index()
	{
		$this->db->select('*');
		$this->db->from('user');
        $this->db->order_by('role_id', 'ASC');
		return $this->db->get()->result_array();
	}

	public function data($id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id', $id);
		return $this->db->get()->row_array();
	}

	public function ubah($role, $id)
	{
		$this->db->set('role_id', $role);
        $this->db->where('id', $id);
		$this->db->update('user');
	}

	public function suspend($aktif, $id)
	{
		$this->db->set('aktif', $aktif);
        $this->db->where('id', $id);
		$this->db->update('user');
	}
}