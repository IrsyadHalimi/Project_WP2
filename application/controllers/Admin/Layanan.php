<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('wp2');
        $this->load->model('LayananModel');
        $this->load->model('KategoriModel');
        cek_login();
    }

    public function index()
    {
        $data['judul'] = 'Data Layanan';
        $data['layanan'] = $this->LayananModel->join_layanan();
        // $data['layanan2'] = $this->db->get('layanan')->result_array();
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/layanan', $data);
        $this->load->view('admin/templates/footer');
    }

    public function tambahLayanan()
    {
        $data['judul'] = 'Tambah Data Layanan';
        $data['layanan'] = $this->LayananModel->tampilkan_layanan();
        $data['kategori'] = $this->KategoriModel->ambil();
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama_layanan', 'Nama Layanan', 'required', ['required' => 'Nama Layanan harus diisi']);
        $this->form_validation->set_rules('deskripsi_layanan', 'Deskripsi', 'required', ['required' => 'Deskripsi harus diisi']);
        $this->form_validation->set_rules('id_kategori', 'Id Kategori', 'required', ['required' => 'Kategori harus diisi']);
        $this->form_validation->set_rules('biaya_layanan', 'Biaya Layanan', 'required|numeric', ['required' => 'Biaya Layanan harus diisi', 'numeric' => 'Isi dengan angka']);
        $this->form_validation->set_rules('durasi_layanan', 'Durasi Layanan', 'required|numeric', ['required' => 'Durasi Layanan harus diisi', 'numeric' => 'Isi dengan angka']);
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/tambah_layanan', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $nama_layanan = $this->input->post('nama_layanan');
            $deskripsi_layanan = $this->input->post('deskripsi_layanan');
            $biaya_layanan = $this->input->post('biaya_layanan');
            $durasi_layanan = $this->input->post('durasi_layanan');
            $id_kategori = $this->input->post('id_kategori');

            $gambar_layanan = $_FILES['gambar_layanan'];
            if ($gambar_layanan = '') {
            } else {
                $config['upload_path'] = './assets/img/layanan';
                $config['allowed_types'] = 'jpg|png|gif';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('gambar_layanan')) {
                    echo "Upload Gagal";
                    die();
                } else {
                    $gambar_layanan = $this->upload->data('file_name');
                }
            }

            $data = array(
                'nama_layanan' => $nama_layanan,
                'deskripsi_layanan' => $deskripsi_layanan,
                'biaya_layanan' => $biaya_layanan,
                'durasi_layanan' => $durasi_layanan,
                'id_kategori' => $id_kategori,
                'gambar_layanan' => $gambar_layanan
            );
            $this->LayananModel->simpan_layanan($data);
            $this->session->set_flashdata('data', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Ditambahkan!!</div>');
            redirect('Admin/Layanan');
        }
    }

    function editLayanan($id_layanan)
    {
        $data['judul'] = 'Edit Layanan';
        $where = array('id_layanan' => $id_layanan);
        $data['kategori'] = $this->KategoriModel->ambil();
        $data['layanan'] = $this->LayananModel->edit_layanan($where, 'layanan')->result();
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/ubah_layanan', $data);
        $this->load->view('admin/templates/footer');
    }

    function ubahLayanan()
    {
        $data['layanan'] = $this->LayananModel->tampilkan_layanan();
        $id_layanan = $this->input->post('id_layanan');
        $nama_layanan = $this->input->post('nama_layanan');
        $deskripsi_layanan = $this->input->post('deskripsi_layanan');
        $biaya_layanan = $this->input->post('biaya_layanan');
        $durasi_layanan = $this->input->post('durasi_layanan');
        $id_kategori = $this->input->post('id_kategori');

        $upload_image = $_FILES['gambar_layanan'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['upload_path'] = './assets/img/layanan/';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar_layanan')) {
                echo 'gambar belum diupload';
            } else {
                $file = $this->upload->data();
                $gambar = $file['file_name'];
                $data = array(
                    'nama_layanan' => $nama_layanan,
                    'deskripsi_layanan' => $deskripsi_layanan,
                    'biaya_layanan' => $biaya_layanan,
                    'durasi_layanan' => $durasi_layanan,
                    'id_kategori' => $id_kategori,
                    'gambar_layanan' => $gambar
                );

                $where = array(
                    'id_layanan' => $id_layanan
                );

                $this->LayananModel->ubah_layanan($where, $data, 'layanan');
                redirect('Admin/Layanan');
            }
        }
    }

    function hapusLayanan()
    {
        $data = $this->uri->segment(4);
        $this->LayananModel->hapus_layanan($data);
        $this->session->set_flashdata('data', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Dihapus!!</div>');
        redirect('Admin/Layanan');
    }
}
