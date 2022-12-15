<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('wp2');
        $this->load->model('KategoriModel');
        cek_login();
    }

    public function index()
    {
        $data['judul'] = 'Data Kategori Layanan';
        $data['kategori'] = $this->KategoriModel->tampilkan_kategori();
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/kategori', $data);
        $this->load->view('admin/templates/footer');
    }

    public function tambahKategori()
    {
        $data['judul'] = 'Tambah Data karyawan';
        $data['kategori_layanan'] = $this->KategoriModel->tampilkan_kategori();
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required', ['required' => 'Nama Kategori harus diisi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/tambah_kategori', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $NamaKategori = $this->input->post('nama_kategori');

            $data = array(
                'nama_kategori' => $NamaKategori,
            );
            $this->KategoriModel->simpan_kategori($data);
            $this->session->set_flashdata('data', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Ditambahkan!!</div>');
            redirect('Admin/Kategori');
        }
    }

    function editKategori($id_kategori)
    {
        $data['judul'] = 'Edit Kategori';
        $where = array('id_kategori' => $id_kategori);
        $data['kategori'] = $this->KategoriModel->edit_kategori($where, 'kategori_layanan')->result();
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/ubah_kategori', $data);
        $this->load->view('admin/templates/footer');
    }

    function ubahKategori()
    {
        $id_kategori = $this->input->post('id_kategori');
        $nama_kategori = $this->input->post('nama_kategori');

        $data = array(
            'nama_kategori' => $nama_kategori,
        );

        $where = array(
            'id_kategori' => $id_kategori
        );

        $this->KategoriModel->ubah_kategori($where, $data, 'kategori_layanan');
        redirect('Admin/Kategori');
    }


    function hapusKategori()
    {
        $data = $this->uri->segment(4);
        $this->KategoriModel->hapus_kategori($data);
        $this->session->set_flashdata('data', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Dihapus!!</div>');
        redirect('Admin/Kategori');
    }
}
