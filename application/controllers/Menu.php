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
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/user_footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu added</div>');
            redirect('menu');
        }
    }

    public function submenu()
    {
        $data['title'] = 'Sub Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/user_footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sub Menu added</div>');
            redirect('menu/submenu');
        }
    }

    public function deleteMenu($id)
    {
        $this->load->model('Delete_model', 'delete');

        $data['delete'] = $this->delete->deleteDataMenu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Delete success</div>');
        redirect('menu');
    }

    public function deleteSubMenu($id)
    {
        $this->load->model('Delete_model', 'delete');

        $data['delete'] = $this->delete->deleteSubMenu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Delete success</div>');
        redirect('menu/submenu');
    }

    public function menuedit($id)
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get_where('user_menu', ['id' => $id])->row_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('menu/menu_edit', $data);
            $this->load->view('templates/user_footer');
        } else {
            $menu = $this->input->POST('menu');

            $this->db->set('menu', $menu);

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('user_menu');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit success</div>');
            redirect('menu');
        }
    }

    public function submenuedit($id)
    {
        $data['title'] = 'Sub Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['ed_menu'] = $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
        $data['submenu'] = $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('menu/submenu_edit', $data);
            $this->load->view('templates/user_footer');
        } else {
            $title = $this->input->POST('title');
            $menu_id = $this->input->POST('menu_id');
            $url = $this->input->POST('url');
            $icon = $this->input->POST('icon');
            $is_active = $this->input->POST('is_active');

            $this->db->set('title', $title);
            $this->db->set('menu_id', $menu_id);
            $this->db->set('url', $url);
            $this->db->set('icon', $icon);
            $this->db->set('is_active', $is_active);


            $this->db->where('id', $this->input->post('id'));
            $this->db->update('user_sub_menu');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit succes</div>');
            redirect('menu/submenu');
        }
    }
}
