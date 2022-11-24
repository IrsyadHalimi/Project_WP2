<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('wp2');
    }
    public function index()
    {
        $this->load->model('ProdukModel');
        $data['judul'] = 'Administrator';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->ProdukModel->get_produk()->result_array();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/admin_view');
        $this->load->view('admin/templates/footer');
    }
}
