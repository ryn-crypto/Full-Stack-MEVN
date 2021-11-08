<?php 

function cek_login()
{
    $ci = get_instance();

    if(!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(1);

        $ci->load->model('menu');

        $menu_id = $ci->menu->utama($menu);
        $user_akses = $ci->menu->user_akses($role_id, $menu_id);

        if($user_akses->num_rows() < 1) {
            redirect('auth/blocked');
        }
    }
}