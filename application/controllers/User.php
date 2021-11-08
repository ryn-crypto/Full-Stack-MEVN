<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

	public function index()
	{
        $data['title'] = 'Profile';
        $email = ['email' =>  $this->session->userdata('email')];
        $this->load->model('registrasi');
        $this->load->model('menu');

        $data['user'] = $this->registrasi->ambil_data($email, 'user');
        $data['role'] = $this->registrasi->join_data($email);
        $data['menu'] = $this->menu->index($data['role']['role_id']);
        $data['sub_menu'] = $this->menu->sub_menu();


        $this->form_validation->set_rules('nama', 'Nama', 'required|trim',
        [
			'required' => 'Nama harus diisi!'
		]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim',
        [
			'required' => 'Alamat harus diisi!'
		]);
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required|trim',
        [
			'required' => 'Nomor hp harus diisi!'
		]);


        if($this->form_validation->run() == false) {
            $this->load->view('templates2/header', $data);
            $this->load->view('templates2/sidebar', $data);
            $this->load->view('templates2/topbar', $data);
            $this->load->view('user/index', $data);
            $this->load->view('templates2/footer');

        } else {
            $update['nama'] = $this->input->post('nama');
            $update['email'] = $this->input->post('email');
            $update['tempat_tinggal'] = $this->input->post('alamat');
            $update['no_hp'] = $this->input->post('no_hp');
            $update['tentang'] = $this->input->post('catatan');

            // cek gambar yang akan di upload
            $upload_image = $_FILES['gambar']['name'];
            
            if($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';
                $config['upload_path'] = './assets/images/profile';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {

                    $gambar_lama = $data['user']['gambar'];
                    if ($gambar_lama != 'default.png') {
                        unlink(FCPATH . 'assets/images/profile/' . $gambar_lama);
                    }

                    $gambar_baru = $this->upload->data('file_name');
                    $update['gambar'] = $gambar_baru;
                } else {
                    echo $this->upload->display_errors();
                }
            }


            $this->load->model('profil');
            $this->profil->index($update);

            $this->session->set_flashdata('message', '<div class="alert alert-success text-dark" role="alert">Profil sudah di update</div>');
			redirect('user');
        }
    }
}