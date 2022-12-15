<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Klien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('wp2');
        $this->load->model('KlienModel');
        cek_login();
    }

    public function index()
    {
        $data['judul'] = 'Data Klien';
        $data['klien'] = $this->KlienModel->tampilkan_klien();
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/klien', $data);
        $this->load->view('admin/templates/footer');
    }
}
