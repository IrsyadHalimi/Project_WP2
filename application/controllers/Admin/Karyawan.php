<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('wp2');
        $this->load->model('KaryawanModel');
        cek_login();
    }

    public function index()
    {
        $data['judul'] = 'Data Karyawan';
        $data['karyawan'] = $this->KaryawanModel->tampilkan_karyawan();
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/karyawan', $data);
        $this->load->view('admin/templates/footer');
    }

    public function tambahKaryawan()
    {
        $data['judul'] = 'Tambah Data karyawan';
        $data['karyawan'] = $this->KaryawanModel->tampilkan_karyawan();
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama_depan', 'Nama Depan', 'required', ['required' => 'Nama Depan harus diisi']);
        $this->form_validation->set_rules('nama_belakang', 'Nama Belakang', 'required', ['required' => 'Nama Belakang harus diisi']);
        $this->form_validation->set_rules('no_telepon', 'No Telepon', 'required|numeric', ['required' => 'Masukkan No Telepon', 'numeric' => 'Isi dengan angka']);
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email', ['required' => 'Email belum diisi', 'valid_email' => 'Email tidak valid']);
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/tambah_karyawan', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $NamaDepan = $this->input->post('nama_depan');
            $NamaBelakang = $this->input->post('nama_belakang');
            $NoTelepon = $this->input->post('no_telepon');
            $Email = $this->input->post('email');

            $gambar_karyawan = $_FILES['gambar_karyawan'];
            if ($gambar_karyawan = '') {
            } else {
                $config['upload_path'] = './assets/img/karyawan';
                $config['allowed_types'] = 'jpg|png|gif';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('gambar_karyawan')) {
                    echo "Upload Gagal";
                    die();
                } else {
                    $gambar_karyawan = $this->upload->data('file_name');
                }
            }

            $data = array(
                'nama_depan' => $NamaDepan,
                'nama_belakang' => $NamaBelakang,
                'no_telepon' => $NoTelepon,
                'email' => $Email,
                'gambar_karyawan' => $gambar_karyawan
            );
            $this->KaryawanModel->simpan_karyawan($data);
            $this->session->set_flashdata('data', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Ditambahkan!!</div>');
            redirect('Admin/Karyawan');
        }
    }

    function editKaryawan($id_karyawan)
    {
        $data['judul'] = 'Edit Karyawan';
        $where = array('id_karyawan' => $id_karyawan);
        $data['karyawan'] = $this->KaryawanModel->edit_karyawan($where, 'karyawan')->result();
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/ubah_karyawan', $data);
        $this->load->view('admin/templates/footer');
    }

    function ubahKaryawan()
    {
        $id_karyawan = $this->input->post('id_karyawan');
        $nama_depan = $this->input->post('nama_depan');
        $nama_belakang = $this->input->post('nama_belakang');
        $no_telepon = $this->input->post('no_telepon');
        $email = $this->input->post('email');

        $upload_image = $_FILES['gambar_karyawan'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['upload_path'] = './assets/img/karyawan/';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar_karyawan')) {
                echo 'gambar belum diupload';
            } else {
                $file = $this->upload->data();
                $gambar = $file['file_name'];
                $data = array(
                    'nama_depan' => $nama_depan,
                    'nama_belakang' => $nama_belakang,
                    'no_telepon' => $no_telepon,
                    'email' => $email,
                    'gambar_karyawan' => $gambar
                );

                $where = array(
                    'id_karyawan' => $id_karyawan
                );

                $this->KaryawanModel->ubah_karyawan($where, $data, 'karyawan');
                redirect('Admin/Karyawan');
            }
        }
    }

    function hapusKaryawan()
    {
        $data = $this->uri->segment(4);
        $this->KaryawanModel->hapus_karyawan($data);
        $this->session->set_flashdata('data', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Dihapus!!</div>');
        redirect('Admin/Karyawan');
    }
}
