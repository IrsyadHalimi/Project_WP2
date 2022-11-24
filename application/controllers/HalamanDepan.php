<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HalamanDepan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('ProdukModel');
    }

    public function index()
    {
        $params['title'] = 'Selamat Datang di Toko Sayur 22';

        $data['product'] = $this->ProdukModel->get_produk()->result_array();

        $this->load->view('templates/header', $params);
        $this->load->view('home2', $data);
        $this->load->view('templates/footer');
    }
}
