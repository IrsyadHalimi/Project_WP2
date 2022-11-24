<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Data Produk';
        $data['pelanggan'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->ModelProduk->getProduk()->result_array();
        $this->form_validation->set_rules('nama_produk', 'Produk', 'required|min_length[3]', ['required' => 'Nama Produk harus diisi', 'min_length' => 'Judul buku terlalu pendek']);
        $this->form_validation->set_rules('sku', 'SKU', 'required|min_length[8]', ['required' => 'SKU harus diisi', 'min_length' => 'kode kurang dari 8 karakter',]);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', ['required' => 'Masukkan deskripsi']);
        $this->form_validation->set_rules('harga', 'Harga', 'required', ['required' => 'Harga belum diisi', 'min_length' => 'Nama penerbit terlalu pendek']);
        $this->form_validation->set_rules('tahun', 'Tahun Terbit', 'required|min_length[3]|max_length[4]|numeric', ['required' => 'Tahun terbit harus diisi', 'min_length' => 'Tahun terbit terlalu pendek', 'max_length' => 'Tahun terbit terlalu panjang', 'numeric' => 'Hanya boleh diisi angka']);
        $this->form_validation->set_rules('isbn', 'Nomor ISBN', 'required|min_length[3]|numeric', ['required' => 'Nama ISBN harus diisi', 'min_length' => 'Nama ISBN terlalu pendek', 'numeric' => 'Yang anda masukan bukan angka']);
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric', ['required' => 'Stok harus diisi', 'numeric' => 'Yang anda masukan bukan angka']);
        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '1024';
        $config['max_height'] = '1000';
        $config['file_name'] = 'img' . time();
        $this->load->library('upload', $config);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('buku/index', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                $gambar = $image['file_name'];
            } else {
                $gambar = '';
            }
            $data = [
                'judul_buku' => $this->input->post('judul_buku', true), 'id_kategori' => $this->input->post('id_kategori', true), 'pengarang' => $this->input->post('pengarang', true), 'penerbit' => $this->input->post('penerbit', true), 'tahun_terbit' => $this->input->post('tahun', true), 'isbn' => $this->input->post('isbn', true), 'stok' => $this->input->post('stok', true), 'dipinjam' => 0, 'dibooking' => 0, 'image' => $gambar
            ];
            $this->ModelBuku->simpanBuku($data);
            redirect('buku');
        }
    }
}
