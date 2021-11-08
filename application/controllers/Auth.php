<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->_ceksession();
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', 
		[
			'required' => 'email harus diisi!',
			'valid_email' => 'email tidak valid!'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', 
		[
			'required' => 'password harus diisi!'
		]);

		if($this->form_validation->run() == false) {
			$data['judul'] = 'Login';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		} else {
			$this->_login();
		}
	}

	public function registrasi()
	{
		$this->_ceksession();

		$this->form_validation->set_rules('nama', 'Nama', 'required|trim', 
		[
			'required' => 'nama harus diisi!'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', 
		[
			'required' => 'email harus diisi!',
			'valid_email' => 'email tidak valid!',
			'is_unique' => 'email sudah terdaftar!',
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', 
		[
			'required' => 'password harus diisi!',
			'matches' => 'password tidak sama!',
			'min_length' => 'password terlalu pendek!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if( $this->form_validation->run() == false) {
			$data['judul'] = 'Registrasi User';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/registrasi');
			$this->load->view('templates/auth_footer');
		} else {
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'gambar' => 'default.png',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 3,
				'waktu_gabung' => time(),
				'aktif' => 1
			];

			$this->load->model('registrasi');
			$this->registrasi->register($data, 'user');
			
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! akun anda sudah terdaftar. silahkan login</div>');
			redirect('auth');
		}
	}

	public function logout() 
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kamu sudah Log out!</div>');
		redirect('auth');
	}

	public function blocked()
	{
		$this->load->view('auth/blocked');
	}


	// private function

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$this->load->model('Registrasi');
		$user = $this->Registrasi->ambil_data(['email' => $email], 'user');

		if($user) {
			if($user['aktif'] == 1) {
				if(password_verify($password, $user['password'])) {
					
					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];

					$this->session->set_userdata($data);
					
					if($user['role_id'] == 1){
						redirect('admin');
					} else if($user['role_id'] == 2) {
						redirect('user');
					} else {
						redirect('home');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun belum teraktifasi!</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email tidak terdaftar!</div>');
			redirect('auth');
		}
	}



	private function _ceksession()
	{
		if($this->session->userdata('email')) {
			redirect('user');
		}
	}
}
