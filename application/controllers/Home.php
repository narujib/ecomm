<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Product SMK N Jawa Tengah';
        $this->load->model('Menu_model', 'menu');
        $data['home'] = $this->db->get('home')->row_array();

        $data['product'] = $this->menu->productLimit();

        $this->load->view('templates/home_header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/home_footer');
    }

    public function product()
    {
        $data['title'] = 'Product SMK N Jawa Tengah - Our Product';
        $data['jurusan'] = $this->db->get('jurusan')->result_array();
        $this->load->model('Menu_model', 'menu');

        $data['product'] = $this->menu->getJurusan();

        $this->load->view('templates/home_header', $data);
        $this->load->view('home/product', $data);
        $this->load->view('templates/home_footer');
    }

    public function contact()
    {
        $data['title'] = 'Product SMK N Jawa Tengah - Contact';
        $data['jurusan'] = $this->db->get('jurusan')->result_array();


        $this->load->view('templates/home_header', $data);
        $this->load->view('home/contact', $data);
        $this->load->view('templates/home_footer');
    }

    public function productdetail($id)
    {
        $data['title'] = 'Produk SMK N Jawa Tengah - Detail Product';
        $this->load->model('Menu_model', 'menu');

        $data['all'] = $this->menu->productLimitV();;
        $data['product'] = $this->db->get_where('product', ['id' => $id])->row_array();
        $data['jurusan'] = $this->db->get('jurusan')->result_array();

        $this->load->view('templates/home_header', $data);
        $this->load->view('home/product_single', $data);
        $this->load->view('templates/home_footer');
    }
}
