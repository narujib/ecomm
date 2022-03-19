<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title']      = 'Menu Management';
        $data['tb_admin']   = $this->db->get_where('tb_admin', ['admin_email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('admin_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/dashboard_header', $data);
            $this->load->view('templates/dashboard_sidebar', $data);
            $this->load->view('templates/dashboard_topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/dashboard_footer');
        } else {
            $this->db->insert('admin_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu added !</div>');
            redirect('menu');
        }
    }

    public function submenu()
    {
        $data['title']      = 'Sub Menu Management';
        $data['tb_admin']   = $this->db->get_where('tb_admin', ['admin_email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();

        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('templates/dashboard_sidebar', $data);
        $this->load->view('templates/dashboard_topbar', $data);
        $this->load->view('menu/submenu', $data);
        $this->load->view('templates/dashboard_footer');
    }
}
