<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('wp2');
        $this->load->model('LayananModel');
    }

    public function index()
    {
        $data['judul'] = 'Data Layanan';
        $data['layanan'] = $this->LayananModel->tampilkan_layanan();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/layanan', $data);
        $this->load->view('admin/templates/footer');
    }

    public function tambahLayanan()
    {
        $data['judul'] = 'Tambah Data Layanan';
        $data['layanan'] = $this->LayananModel->tampilkan_layanan();

        $this->form_validation->set_rules('nama_layanan', 'Nama Layanan', 'required', ['required' => 'Nama Layanan harus diisi']);
        $this->form_validation->set_rules('deskripsi_layanan', 'Deskripsi', 'required', ['required' => 'Deskripsi harus diisi']);
        $this->form_validation->set_rules('id_kategori', 'Nama Layanan', 'required', ['required' => 'Kategori harus diisi']);
        $this->form_validation->set_rules('biaya_layanan', 'Biaya Layanan', 'required|numeric', ['required' => 'Biaya Layanan harus diisi', 'numeric' => 'Isi dengan angka']);
        $this->form_validation->set_rules('durasi_layanan', 'Durasi Layanan', 'required|numeric', ['required' => 'Durasi Layanan harus diisi', 'numeric' => 'Isi dengan angka']);
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/tambah_layanan', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $NamaLayanan = $this->input->post('nama_layanan');
            $Deskripsi = $this->input->post('deskripsi_layanan');
            $Kategori = $this->input->post('id_kategori');
            $Biaya = $this->input->post('biaya_layanan');
            $Durasi = $this->input->post('durasi_layanan');

            $data = array(
                'nama_depan' => $NamaLayanan,
                'deskripsi_layanan' => $Deskripsi,
                'biaya_layanan' => $Biaya,
                'durasi_layanan' => $Durasi,
                'id_kategori' => $Kategori
            );
            $this->LayananModel->simpan_layanan($data);
            $this->session->set_flashdata('data', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Ditambahkan!!</div>');
            redirect('Layanan');
        }
    }

    function hapusLayanan()
    {
        $data = $this->uri->segment(3);
        $this->LayananModel->hapus_layanan($data);
        $this->session->set_flashdata('data', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Dihapus!!</div>');
        redirect('Layanan');
    }
}
