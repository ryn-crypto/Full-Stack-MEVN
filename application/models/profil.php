<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Model {

	public function index($data)
	{
        $this->db->set($data);
        $this->db->where('email', $data['email']);
		$this->db->update('user', $data);
	}

	public function ubahpassword($data,$pasbaru)
	{
        $this->db->set($pasbaru);
        $this->db->where($data);
		$this->db->update('user');
	}

}