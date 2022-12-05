<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('wp2');
        $this->load->model('KategoriModel');
    }

    public function index()
    {
        $data['judul'] = 'Data Kategori Layanan';
        $data['kategori'] = $this->KategoriModel->tampilkan_kategori();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/kategori', $data);
        $this->load->view('admin/templates/footer');
    }

    public function tambahKategori()
    {
        $data['judul'] = 'Tambah Data karyawan';
        $data['kategori_layanan'] = $this->KategoriModel->tampilkan_kategori();

        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required', ['required' => 'Nama Kategori harus diisi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/tambah_kategori', $data);
            $this->load->view('admin/templates/footer');
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

    function hapusKategori()
    {
        $data = $this->uri->segment(3);
        $this->KategoriModel->hapus_kategori($data);
        $this->session->set_flashdata('data', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Dihapus!!</div>');
        redirect('Kategori');
    }
}
