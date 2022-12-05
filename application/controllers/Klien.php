<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Klien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('wp2');
        $this->load->model('KlienModel');
    }

    public function index()
    {
        $data['judul'] = 'Data Klien';
        $data['klien'] = $this->KlienModel->tampilkan_klien();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/klien', $data);
        $this->load->view('admin/templates/footer');
    }
}
