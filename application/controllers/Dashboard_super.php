<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_super extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title']      = 'Dashboard';
        $data['tb_admin']   = $this->db->get_where('tb_admin', ['admin_email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('templates/dashboard_sidebar', $data);
        $this->load->view('templates/dashboard_topbar', $data);
        $this->load->view('dashboard_super/index', $data);
        $this->load->view('templates/dashboard_footer');
    }
}
