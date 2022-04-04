<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Produk SMK N Jawa Tengah';
        $this->load->model('Menu_model', 'menu');

        $data['product'] = $this->menu->getJurusan();

        // $this->load->view('templates/home_header', $data);
        $this->load->view('home/index', $data);
        // $this->load->view('templates/home_footer');
    }

    public function product()
    {
        $data['title'] = 'Produk SMK N Jawa Tengah - Our Product';
        $this->load->model('Menu_model', 'menu');

        $data['product'] = $this->menu->getJurusan();

        $this->load->view('templates/home_header', $data);
        $this->load->view('home/product', $data);
        $this->load->view('templates/home_footer');
    }

    public function productSingle()
    {
        $data['title'] = 'Produk SMK N Jawa Tengah - Our Product';
        $this->load->model('Menu_model', 'menu');

        $data['product'] = $this->menu->getJurusan();

        $this->load->view('templates/home_header', $data);
        $this->load->view('home/product', $data);
        $this->load->view('templates/home_footer');
    }
}
