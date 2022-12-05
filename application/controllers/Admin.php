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
    }

    public function index()
    {
        $data['judul'] = 'Dasbor';
        $data['jumlahKlien'] = $this->KlienModel->jumlah_klien();
        $data['jumlahLayanan'] = $this->LayananModel->jumlah_layanan();
        $data['jumlahKaryawan'] = $this->KaryawanModel->jumlah_karyawan();
        $data['jumlahAntrian'] = $this->BookingModel->jumlah_antrian();
        //passing data controller ke view
        $data['batal'] = "0";

        //active record dengan nama edi
        $aktif = array('batal' => '0');

        // query memanggil function tigatable di model
        $data['joinbooking'] = $this->BookingModel->join_booking($aktif);

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/index', $data);
        $this->load->view('admin/templates/footer');
    }


    // public function hapusProduk()
    // {
    //     $id = $this->uri->segment(3);
    //     $this->ProdukModel->hapus_produk($id);
    //     redirect('Admin');
    // }

    // public function editProduk()
    // {
    //     $data['judul'] = 'Edit Produk';
    //     $id = $this->uri->segment(3);
    //     $data['produk'] = $this->ProdukModel->edit_produk($id);

    //     $this->load->view('admin/templates/header', $data);
    //     $this->load->view('admin/templates/sidebar');
    //     $this->load->view('admin/admin_edit_produk', $data);
    //     $this->load->view('admin/templates/footer');
    // }

    // public function updateProduk()
    // {
    //     $id['id'] = $this->input->post('id');
    //     $sku = $this->input->post('sku');
    //     $namaproduk = $this->input->post('nama_produk');
    //     $deskripsi = $this->input->post('deskripsi');
    //     $stok = $this->input->post('stok');
    //     $harga = $this->input->post('harga');

    //     $data = [
    //         'sku' => $sku,
    //         'nama_produk' => $namaproduk,
    //         'deskripsi' => $deskripsi,
    //         'stok' => $stok,
    //         'harga' => $harga
    //     ];
    //     $this->ProdukModel->update_produk($data, $id);
    //     redirect('Admin');
    // }
    // public function simpanProduk()
    // {
    //     $sku = $this->input->post('sku');
    //     $namaproduk = $this->input->post('nama_produk');
    //     $deskripsi = $this->input->post('deskripsi');
    //     $stok = $this->input->post('stok');
    //     $harga = $this->input->post('harga');

    //     $data = [
    //         'sku' => $sku,
    //         'nama_produk' => $namaproduk,
    //         'deskripsi' => $deskripsi,
    //         'stok' => $stok,
    //         'harga' => $harga
    //     ];
    //     $this->ProdukModel->simpan_produk($data);
    //     redirect('Admin');
    // }
}
