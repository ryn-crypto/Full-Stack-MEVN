<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Model {

	public function register($data, $tabel)
	{
		$this->db->insert($tabel, $data);
	}

	public function ambil_data($data, $tabel)
	{

		return $this->db->get_where($tabel, $data)->row_array();
	}

	public function join_data($data)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('user_role','user.role_id = user_role.id');
		$this->db->where($data);
		return $this->db->get()->row_array();

	}
}