<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

	public function index()
	{
        $data['title'] = 'Dasboard';

        $email = ['email' =>  $this->session->userdata('email')];
        $this->load->model('registrasi');
        $this->load->model('menu');

        $data['user'] = $this->registrasi->ambil_data($email, 'user');
        $data['role'] = $this->registrasi->join_data($email);
        $data['menu'] = $this->menu->index($data['role']['role_id']);
        $data['sub_menu'] = $this->menu->sub_menu();

        $this->load->view('templates2/header', $data);
        $this->load->view('templates2/sidebar', $data);
        $this->load->view('templates2/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates2/footer');
    }

    public function list()
	{
        $data['title'] = 'Daftar User';

        $email = ['email' =>  $this->session->userdata('email')];
        $this->load->model('registrasi');
        $this->load->model('menu');
        $this->load->model('daftar');

        $data['user'] = $this->registrasi->ambil_data($email, 'user');
        $data['role'] = $this->registrasi->join_data($email);
        $data['menu'] = $this->menu->index($data['role']['role_id']);
        $data['sub_menu'] = $this->menu->sub_menu();
        $data['daftar'] = $this->daftar->index();

        $this->load->view('templates2/header', $data);
        $this->load->view('templates2/sidebar', $data);
        $this->load->view('templates2/topbar', $data);
        $this->load->view('admin/listuser', $data);
        $this->load->view('templates2/footer');
    }

    public function ubah()
	{
        
        $id =  $this->uri->segment(3);

        $this->load->model('daftar');
        $data = $this->daftar->data($id);
        $role_id = $data['role_id'];

        if ($role_id == 2) {
            $role = 1;
        } else {
            $role = 2;
        }

        $this->daftar->ubah($role, $id);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Konfigurasi sudah berhasil</div>');
        redirect('admin/list');
    }

    public function suspend()
	{
        
        $id =  $this->uri->segment(3);

        $this->load->model('daftar');
        $data = $this->daftar->data($id);
        $a = $data['aktif'];

        if ($a == 1) {
            $aktif = 0;
        } else {
            $aktif = 1;
        }

        $this->daftar->suspend($aktif, $id);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Konfigurasi sudah berhasil</div>');
        redirect('admin/list');
    }

    public function pesanan()
	{
        $data['title'] = 'Pesanan';

        $email = ['email' =>  $this->session->userdata('email')];
        $this->load->model('registrasi');
        $this->load->model('menu');

        $data['user'] = $this->registrasi->ambil_data($email, 'user');
        $data['role'] = $this->registrasi->join_data($email);
        $data['menu'] = $this->menu->index($data['role']['role_id']);
        $data['sub_menu'] = $this->menu->sub_menu();

		$this->load->view('templates2/header', $data);
        $this->load->view('templates2/sidebar', $data);
        $this->load->view('templates2/topbar', $data);
        $this->load->view('admin/pesanan', $data);
        $this->load->view('templates2/footer');
	}

}