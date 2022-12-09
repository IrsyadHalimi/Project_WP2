<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Booking extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('wp2');
        $this->load->model('LayananModel');
        $this->load->model('KaryawanModel');
        $this->load->model('KlienModel');
        $this->load->model('BookingModel');
    }

    public function index()
    {
        $this->load->view('user/templates/header_user');
        $this->load->view('user/index');
        $this->load->view('user/templates/footer_user');
    }

    public function buatBooking()
    {
        $data['layanan'] = $this->LayananModel->tampilkan_layanan();
        $data['karyawan'] = $this->KaryawanModel->tampilkan_karyawan();
        $this->form_validation->set_rules('nama_depan_klien', 'Nama Depan Klien', 'required', ['required' => 'Nama Depan harus diisi']);
        $this->form_validation->set_rules('nama_belakang_klien', 'Nama Belakang Klien', 'required', ['required' => 'Nama Belakang harus diisi']);
        $this->form_validation->set_rules('no_telepon_klien', 'No Telepon Klien', 'required', ['required' => 'No Telepon harus diisi']);
        $this->form_validation->set_rules('email_klien', 'Email Klien', 'required|valid_email', ['required' => 'Email harus diisi', 'valid_email' => 'Email Tidak Valid']);
        $this->form_validation->set_rules('nama_depan_klien', 'Nama Depan Klien', 'required', ['required' => 'Nama Depan harus diisi']);
        $this->form_validation->set_rules('nama_layanan', 'Nama Layanan', 'required', ['required' => 'Layanan Belum Dipilih']);
        $this->form_validation->set_rules('nama_depan', 'Nama Depan', 'required', ['required' => 'Barberman Belum Dipilih']);
        $this->form_validation->set_rules('jadwal', 'Jadwal', 'required', ['required' => 'Jadwal Belum Dipilih']);
        if ($this->form_validation->run() == false) {
            $this->load->view('user/templates/header_user', $data);
            $this->load->view('user/buat_booking', $data);
            $this->load->view('user/templates/footer_user');
        } else {
            $NamaKategori = $this->input->post('nama_kategori');

            $data = array(
                'nama_kategori' => $NamaKategori,
            );
            $this->KategoriModel->simpan_kategori($data);
            $this->session->set_flashdata('data', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Ditambahkan!!</div>');
            redirect('Kategori');
        }
    }
}
