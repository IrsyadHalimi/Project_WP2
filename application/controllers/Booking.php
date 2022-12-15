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
            $tanggal = $this->input->post('tanggal');
            $waktu = $this->input->post('waktu');
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
            $this->KlienModel->simpan_klien($data1);

            $data2 = array(
                'tanggal_dibuat' => $tanggaldibuat,
                'id_karyawan' => $karyawan,
                'waktu_mulai' => $waktu,
                'waktu_selesai' => $waktu,
                'batal' => '0',
            );
            $this->BookingModel->simpan_booking($data2);
            $this->session->set_flashdata('data', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Ditambahkan!!</div>');
            redirect('Booking/selesaiBooking');
        }
    }

    function selesaiBooking()
    {
        $data['judul'] = 'Selesai Booking';
        $this->load->view('user/templates/header_user', $data);
        $this->load->view('user/selesai_booking', $data);
        $this->load->view('user/templates/footer_user');
    }


    // $this->form_validation->set_rules('nama_depan_klien', 'Nama Depan Klien', 'required', ['required' => 'Nama Depan harus diisi']);
    // $this->form_validation->set_rules('nama_belakang_klien', 'Nama Belakang Klien', 'required', ['required' => 'Nama Belakang harus diisi']);
    // $this->form_validation->set_rules('no_telepon_klien', 'No Telepon Klien', 'required|numeric', ['required' => 'No Telepon harus diisi', 'numeric' => 'Harus diisi dengan angka']);
    // $this->form_validation->set_rules('email_klien', 'Email Klien', 'required|valid_email', ['required' => 'Email harus diisi', 'valid_email' => 'Email Tidak Valid']);
    // $this->form_validation->set_rules('nama_layanan', 'Nama Layanan', 'required', ['required' => 'Layanan Belum Dipilih']);
    // $this->form_validation->set_rules('nama_depan', 'Nama Depan', 'required', ['required' => 'Barberman Belum Dipilih']);
    // $this->form_validation->set_rules('jadwal', 'Jadwal', 'required', ['required' => 'Jadwal Belum Dipilih']);
    // $this->form_validation->set_rules('waktu', 'Waktu', 'required', ['required' => 'Waktu Belum Dipilih']);
    // if ($this->form_validation->run() == false) {
    //     $this->load->view('user/templates/header_user', $data);
    //     $this->load->view('user/buat_booking', $data);
    //     $this->load->view('user/templates/footer_user');
    // } else {
    //     $id_klien = $this->input->post('id_klien');
    //     $nama_depan_klien  = $this->input->post('nama_depan_klien');
    //     $nama_belakang_klien = $this->input->post('nama_belakang_klien');
    //     $no_telepon_klien = $this->input->post('no_telepon_klien');
    //     $email_klien = $this->input->post('email_klien');
    //     $nama_layanan = $this->input->post('id_layanan');
    //     $nama_depan = $this->input->post('id_karyawan');
    //     $jadwal = $this->input->post('id_hari');
    //     $selected_employee = $this->input->post('selected_employee');
    //     $selected_date_time = $this->input->post('desired_date_time');
    //     $date_selected = $selected_date_time[0];
    //     $waktu_mulai = $date_selected . " " . $selected_date_time[1];
    //     $waktu_selesai = $date_selected . " " . $selected_date_time[2];
    //     $waktu1 = $this->input->post('waktu_mulai');
    //     $waktu2 = $this->input->post('waktu_selesai');

    //     $data1 = array(
    //         'nama_depan_klien' => $nama_depan_klien,
    //         'nama_belakang_klien' => $nama_belakang_klien,
    //         'no_telepon_klien' => $no_telepon_klien,
    //         'email_klien' => $email_klien
    //     );
    //     $data2 = array(
    //         'tanggal_dibuat' => Date("Y-m-d H:i"),
    //         'id_klien' => $id_klien,
    //         'id_layanan' => $nama_layanan,
    //         'id_karyawan' => $selected_employee,
    //         'waktu_mulai' => $waktu1,
    //         'waktu_selesai' => $waktu2
    //     );
    //     $data3 = array(
    //         'id_booking' => '',
    //         'id_layanan' => ''
    //     );
    //     $this->KategoriModel->simpan_kategori($data1);
    //     $this->session->set_flashdata('data', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Ditambahkan!!</div>');
    //     redirect('Booking');
    // }
}
