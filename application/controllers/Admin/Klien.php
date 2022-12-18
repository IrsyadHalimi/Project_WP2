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

    function hapusKlien()
    {
        $data = $this->uri->segment(4);
        $this->KlienModel->hapus_klien($data);
        $this->session->set_flashdata('data', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Dihapus!!</div>');
        redirect('Admin/Klien');
    }
}
