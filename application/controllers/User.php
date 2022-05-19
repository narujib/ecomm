<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['UserDetail'] = $this->menu->jurusanById();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/user_footer');
    }

    public function editProfile()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['UserDetail'] = $this->menu->jurusanById();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('user/edit_profile', $data);
            $this->load->view('templates/user_footer');
        } else {
            $name = $this->input->POST('name');
            $email = $this->input->POST('email');

            // CEK JIKA ADA GAMBAR
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['allowed_types']    = 'gif|jpg|png|jpeg';
                $config['max_sizes']        = '2048';
                $config['upload_path']      = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_error();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated</div>');
            redirect('user');
        }
    }

    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[6]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[6]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('user/change_password', $data);
            $this->load->view('templates/user_footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
                    redirect('user/changepassword');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password changed!</div>');
                    redirect('user/changepassword');
                }
            }
        }
    }

    public function blocked()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('user/block', $data);
        $this->load->view('templates/user_footer');
    }

    public function product()
    {
        $data['title'] = 'Product';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['userID'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['product'] = $this->menu->ProductbyUser();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('product/index', $data);
        $this->load->view('templates/user_footer');
    }

    public function createproduct()
    {
        $data['title'] = 'Product';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jurusan'] = $this->db->get('jurusan')->result_array();
        $this->load->model('Menu_model', 'menu');

        $data['product'] = $this->menu->jurusanById();

        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('description', 'Descrioption', 'required|trim');
        $this->form_validation->set_rules('youtube_embed', 'Youtube', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('product/create_product', $data);
            $this->load->view('templates/user_footer');
        } else {

            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_sizes']        = '2048';
            $config['upload_path']      = './assets/img/product/';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $image = 'default.jpg';
            } else {
                $image = $this->upload->data();
                $image = $image['file_name'];
            }
            if (!$this->upload->do_upload('image2')) {
                $image2 = 'default.jpg';
            } else {
                $image2 = $this->upload->data();
                $image2 = $image2['file_name'];
            }
            if (!$this->upload->do_upload('image3')) {
                $image3 = 'default.jpg';
            } else {
                $image3 = $this->upload->data();
                $image3 = $image3['file_name'];
            }
            if (!$this->upload->do_upload('image4')) {
                $image4 = 'default.jpg';
            } else {
                $image4 = $this->upload->data();
                $image4 = $image4['file_name'];
            }
            if (!$this->upload->do_upload('image5')) {
                $image5 = 'default.jpg';
            } else {
                $image5 = $this->upload->data();
                $image5 = $image5['file_name'];
            }

            $data = [
                'title'          => $this->input->post('title'),
                'youtube_embed'          => $this->input->post('youtube_embed'),
                'image'         => $image,
                'image2'         => $image2,
                'image3'         => $image3,
                'image4'         => $image4,
                'image5'         => $image5,
                'description'   => $this->input->post('description'),
                'jurusan_id'    => $this->input->post('jurusan_id'),
                'user_id'       => $this->input->post('user_id'),
                'create_at'     => time()
            ];

            $this->db->insert('product', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Product has been created</div>');
            redirect('user/product');
        }
    }

    public function editproduct($id)
    {
        $data['title'] = 'Product';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['product'] = $this->db->get_where('product', ['id' => $id])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['jurusan'] = $this->menu->jurusanById();

        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('description', 'Descrioption', 'required|trim');
        $this->form_validation->set_rules('youtube_embed', 'Youtube', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('product/edit_product', $data);
            $this->load->view('templates/user_footer');
        } else {

            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_sizes']        = '2048';
            $config['upload_path']      = './assets/img/product/';

            $this->load->library('upload', $config);

            // CEK JIKA ADA GAMBAR
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {

                if (!$this->upload->do_upload('image')) {
                    echo $this->upload->display_error();
                } else {
                    $old_image = $data['product']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/product/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                }
            }
            $upload_image2 = $_FILES['image2']['name'];
            if ($upload_image2) {

                if (!$this->upload->do_upload('image2')) {
                    echo $this->upload->display_error();
                } else {
                    $old_image = $data['product']['image2'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/product/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image2', $new_image);
                }
            }
            $upload_image3 = $_FILES['image3']['name'];
            if ($upload_image3) {

                if (!$this->upload->do_upload('image3')) {
                    echo $this->upload->display_error();
                } else {
                    $old_image = $data['product']['image3'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/product/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image3', $new_image);
                }
            }
            $upload_image4 = $_FILES['image4']['name'];
            if ($upload_image4) {

                if (!$this->upload->do_upload('image4')) {
                    echo $this->upload->display_error();
                } else {
                    $old_image = $data['product']['image4'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/product/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image4', $new_image);
                }
            }
            $upload_image5 = $_FILES['image5']['name'];
            if ($upload_image5) {

                if (!$this->upload->do_upload('image5')) {
                    echo $this->upload->display_error();
                } else {
                    $old_image = $data['product']['image5'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/product/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image5', $new_image);
                }
            }

            $title = $this->input->POST('title');
            $description = $this->input->POST('description');
            $youtube_embed = $this->input->POST('youtube_embed');

            $this->db->set('title', $title);
            $this->db->set('description', $description);
            $this->db->set('youtube_embed', $youtube_embed);

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('product');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">The product has been updated</div>');
            redirect('user/product');
        }
    }

    public function deletproduct($id)
    {
        $this->load->model('Delete_model', 'delete');

        $data['delete'] = $this->delete->deletproduct($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Delete success</div>');
        redirect('user/product');
    }
}
