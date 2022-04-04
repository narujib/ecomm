<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/user_footer');
    }
    public function post()
    {
        echo 'hai';
    }

    public function createAccount()
    {
        $data['jurusan'] = $this->db->get('jurusan')->result_array();
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('role_id', 'Role', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered'
        ]);
        $this->form_validation->set_rules('jurusan_id', 'Jurusan', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password dont matches',
            'min_length' => 'Must be 6 char'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Create Account';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['role_id'] = $this->db->get('user_role')->result_array();
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('admin/create_account', $data);
            $this->load->view('templates/user_footer');
        } else {
            $data = [
                'name'      => htmlspecialchars($this->input->post('name', 'true')),
                'email'     => htmlspecialchars($this->input->post('email', 'true')),
                'image'     => 'default.jpg',
                'password'  => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id'   => $this->input->post('role_id'),
                'is_active' => 1,
                'jurusan_id'   => $this->input->post('jurusan_id'),
                'date_created' => time()
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Account has been created</div>');
            redirect('administrator/createaccount');
        }
    }

    public function Accounts()
    {
        $data['role'] = $this->db->get('user_role')->result_array();
        $data['jurusan'] = $this->db->get('jurusan')->result_array();
        $data['user_role'] = $this->db->get('user_role')->result_array();
        $data['userList'] = $this->db->get('user')->result_array();
        $data['jurusan'] = $this->db->get('jurusan')->result_array();
        $this->form_validation->set_rules('role_id', 'Role', 'required|trim');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered'
        ]);
        $this->form_validation->set_rules('jurusan_id', 'Jurusan', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password dont matches',
            'min_length' => 'Must be 6 char'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Accounts';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('admin/accounts', $data);
            $this->load->view('templates/user_footer');
        } else {
            $data = [
                'name'      => htmlspecialchars($this->input->post('name', 'true')),
                'email'     => htmlspecialchars($this->input->post('email', 'true')),
                'image'     => 'default.jpg',
                'password'  => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id'   => $this->input->post('role_id'),
                'is_active' => 1,
                'jurusan_id'   => $this->input->post('jurusan_id'),
                'date_created' => time()
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Account has been created</div>');
            redirect('administrator/accounts');
        }
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/user_footer');
        } else {
            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role added</div>');
            redirect('administrator/role');
        }
    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('admin/role_access', $data);
        $this->load->view('templates/user_footer');
    }

    public function roleEdit($role_id)
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();


        $this->form_validation->set_rules('role', 'New Role Name', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('admin/role_edit', $data);
            $this->load->view('templates/user_footer');
        } else {
            $role = $this->input->POST('role');
            $this->db->set('role', $role);

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('user_role');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role Name has been changed</div>');
            redirect('administrator/role');
        }
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];
        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access changed</div>');
    }

    public function jurusan()
    {
        $data['title'] = 'Jurusan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jurusan'] = $this->db->get('jurusan')->result_array();

        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('wa', 'Whatsapp', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('admin/jurusan', $data);
            $this->load->view('templates/user_footer');
        } else {
            $data = [
                'jurusan'   => $this->input->post('jurusan'),
                'wa'   => $this->input->post('wa'),
            ];
            $this->db->insert('jurusan', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Jurusan added</div>');
            redirect('administrator/jurusan');
        }
    }

    public function editJurusan($id)
    {
        $data['title'] = 'Jurusan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['id' => $id])->row_array();

        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('wa', 'Whatsapp', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('admin/jurusan_edit', $data);
            $this->load->view('templates/user_footer');
        } else {
            $jurusan = $this->input->POST('jurusan');
            $wa = $this->input->POST('wa');

            $this->db->set('jurusan', $jurusan);
            $this->db->set('wa', $wa);


            $this->db->where('id', $this->input->post('id'));
            $this->db->update('jurusan');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Jurusan has been changed</div>');
            redirect('administrator/jurusan');
        }
    }

    public function editUser($id)
    {
        $data['ed_user'] = $this->db->get_where('user', ['id' => $id])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();
        $data['jurusan'] = $this->db->get('jurusan')->result_array();
        $data['user_role'] = $this->db->get('user_role')->result_array();
        $data['userList'] = $this->db->get('user')->result_array();
        $data['jurusan'] = $this->db->get('jurusan')->result_array();
        $this->form_validation->set_rules('role_id', 'Role', 'required|trim');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered'
        ]);
        $this->form_validation->set_rules('jurusan_id', 'Jurusan', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password dont matches',
            'min_length' => 'Must be 6 char'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Accounts';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('admin/user_edit', $data);
            $this->load->view('templates/user_footer');
        } else {
            echo 'oke';
        }
    }

    public function deleteJurusan($id)
    {
        $this->load->model('Delete_model', 'delete');

        $data['delete'] = $this->delete->deleteDataJurusan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Delete success</div>');
        redirect('administrator/jurusan');
    }

    public function deleteRole($id)
    {
        $this->load->model('Delete_model', 'delete');

        $data['delete'] = $this->delete->deleteDataRole($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Delete success</div>');
        redirect('administrator/role');
    }
}
