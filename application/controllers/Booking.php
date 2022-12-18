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
        cek_login();
    }

    public function index()
    {
        $data['judul'] = 'Sibershop';
        $data['layanan'] = $this->LayananModel->join_layanan();
        $data['karyawan'] = $this->KaryawanModel->tampilkan_karyawan();
        $this->load->view('user/templates/header_user', $data);
        $this->load->view('user/index', $data);
        $this->load->view('user/templates/footer_user');
    }

    public function buatBooking()
    {
        $data['judul'] = 'Sibershop | Booking';
        $data['karyawan'] = $this->KaryawanModel->tampilkan_karyawan();
        $data['layanan'] = $this->LayananModel->ambil2();
        $data['karyawan'] = $this->KaryawanModel->ambil();

        $this->form_validation->set_rules('layanan', 'layanan', 'required', ['required' => 'Layanan Belum Dipilih']);
        $this->form_validation->set_rules('karyawan', 'karyawan', 'required', ['required' => 'Barberman Belum Dipilih']);
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required', ['required' => 'Tanggal Belum Dipilih']);
        $this->form_validation->set_rules('waktu', 'waktu', 'required', ['required' => 'Waktu Belum Dipilih']);
        $this->form_validation->set_rules('nama', 'nama', 'required', ['required' => 'Nama Belum Diisi']);
        $this->form_validation->set_rules('nama_belakang', 'nama_belakang', 'required', ['required' => 'Nama belakang Belum Diisi']);
        $this->form_validation->set_rules('no_telepon', 'no_telepon', 'required|numeric', ['required' => 'No Telepon Belum Diisi', 'numeric' => 'Harus diisi dengan Angka']);
        $this->form_validation->set_rules('email', 'email', 'required|valid_email', ['required' => 'Email Belum Diisi', 'valid_email' => 'Email Tidak Valid']);
        if ($this->form_validation->run() == false) {
            $this->load->view('user/templates/header_user', $data);
            $this->load->view('user/buat_booking', $data);
            $this->load->view('user/templates/footer_user');
        } else {
            $layanan = $this->input->post('layanan');
            $karyawan = $this->input->post('karyawan');
            $tanggaldibuat = date('Y-m-d H:i:s', now());
            $tanggal = $this->input->post('tanggal', true);
            $waktu = $this->input->post('waktu', true);
            $nama = $this->input->post('nama');
            $nama_belakang = $this->input->post('nama_belakang');
            $no_telepon = $this->input->post('no_telepon');
            $email = $this->input->post('email');

            $data1 = array(
                'nama_depan_klien' => $nama,
                'nama_belakang_klien' => $nama_belakang,
                'no_telepon_klien' => $no_telepon,
                'email_klien' => $email
            );

            $this->db->insert('klien', $data1);
            $insert_id = $this->db->insert_id();


            $data2 = array(
                'tanggal_dibuat' => $tanggaldibuat,
                'id_klien' => $insert_id,
                'id_karyawan' => $karyawan,
                'tanggal' => $tanggal,
                'waktu' => $waktu,
                'batal' => '0',
                'id_layanan' => $layanan
            );
            $this->BookingModel->simpan_booking($data2);
            $this->session->set_flashdata('data', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Ditambahkan!!</div>');
            $this->_selesaiBooking();
        }
    }

    private function _selesaiBooking()
    {
        $data['judul'] = 'Detail Booking';
        $aktif2 = array('batal' => '0');
        $data['joinbooking3'] = $this->BookingModel->join_booking3($aktif2);
        $this->load->view('user/templates/header_user', $data);
        $this->load->view('user/selesai_booking', $data);
        $this->load->view('user/templates/footer_user');
    }
}
