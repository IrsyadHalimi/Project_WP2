<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('wp2');
        $this->load->model('KlienModel');
        $this->load->model('LayananModel');
        $this->load->model('KaryawanModel');
        $this->load->model('BookingModel');
        cek_login();
    }

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jumlahKlien'] = $this->KlienModel->jumlah_klien();
        $data['jumlahLayanan'] = $this->LayananModel->jumlah_layanan();
        $data['jumlahKaryawan'] = $this->KaryawanModel->jumlah_karyawan();
        $data['jumlahAntrian'] = $this->BookingModel->jumlah_antrian();
        $aktif1 = array('batal' => 0);
        $aktif2 = array('batal' => 0);
        $data['antrianbooking'] = $this->BookingModel->antrian_booking($aktif1);
        $data['booking'] = $this->BookingModel->booking($aktif2);

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/templates/footer');
    }

    function hapusBooking()
    {
        $data = $this->uri->segment(4);
        $this->BookingModel->hapus_booking($data);
        $this->session->set_flashdata('data', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Dihapus!!</div>');
        redirect('Admin/Admin');
    }
}
