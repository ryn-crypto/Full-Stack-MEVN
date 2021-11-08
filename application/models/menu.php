<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Model {

	public function index($data)
	{
		$this->db->select('*');
		$this->db->from('user_menu');
		$this->db->join('user_akses_menu','user_menu.id = user_akses_menu.menu_id');
		$this->db->where('user_akses_menu.role_id', $data);
        $this->db->order_by('user_akses_menu.menu_id', 'ASC');
		return $this->db->get()->result_array();
	}

	public function sub_menu()
	{
		$this->db->select('*');
		$this->db->from('user_sub_menu');
		return $this->db->get()->result_array();
	}

	public function utama($menu)
	{
		$query = $this->db->get_where('user_menu', ['nama_menu' => $menu])->row_array();
		return $query['id']; 
	}

	public function user_akses($role_id, $menu_id)
	{
		return  $this->db->get_where('user_akses_menu', ['role_id' => $role_id, 'menu_id' => $menu_id]);

	}
}