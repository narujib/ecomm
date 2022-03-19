<?php
function is_logged_in()
{
    $ci = get_instance();

    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $level_id = $ci->session->userdata('level');
        $menu = $ci->uri->segment(1);

        $queryMenu = $ci->db->get_where('admin_menu', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id'];


        $adminAcces = $ci->db->get_where('admin_akses_menu', [
            'level_id' => $level_id,
            'menu_id' => $menu_id
        ]);
        if ($adminAcces->num_rows() < 1) {
            redirect('auth/blocked');
        }
    }
}
