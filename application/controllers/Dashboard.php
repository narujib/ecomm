<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['tb_admin'] = $this->db->get_where('tb_admin', ['admin_email' => $this->session->userdata('email')])->row_array();
        echo 'selamat datang ' . $data['tb_admin']['admin_name'];
    }
}
