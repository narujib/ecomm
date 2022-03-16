<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            //success
            $this->_login();
        }
    }

    private function _login()
    {
        $admin_email    = $this->input->post('email');
        $admin_pass     = $this->input->post('password');

        $tb_admin = $this->db->get_where('tb_admin', ['admin_email' => $admin_email])->row_array();

        if ($tb_admin) {
            //cekk password
            if (password_verify($admin_pass, $tb_admin['admin_pass'])) {
                $data = [
                    'email' => $tb_admin['admin_email'],
                    'level' => $tb_admin['level']
                ];
                $this->session->set_userdata($data);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password !</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered !</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_admin.admin_email]', [
            'is_unique' => 'This email has already registered !'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password min 6 char !'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'admin_name'    => htmlspecialchars($this->input->post('name', true)),
                'admin_email'   => htmlspecialchars($this->input->post('email', true)),
                'admin_img'     => 'default.jpg',
                'admin_pass'    => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'level'         => 2,
                'date_created'  => time()
            ];

            $this->db->insert('tb_admin', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your account has been created !</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('level');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your have been logout !</div>');
        redirect('auth');
    }
}
