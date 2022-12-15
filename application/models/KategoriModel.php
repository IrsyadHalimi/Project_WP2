<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KategoriModel extends CI_Model
{
    public function tampilkan_kategori()
    {
        $result = $this->db->get('kategori_layanan');
        return $result;
    }

    public function tampil_data()
    {
        $this->db->order_by('id_kategori', 'ASC');
        return $this->db->from('kategori_layanan')
            ->join('tabel_vendor', 'tabel_vendor.id_vendor=tabel_harga.id_vendor')
            ->join('tabel_hari', 'tabel_hari.id_hari=tabel_harga.id_hari')
            ->get()
            ->result();
    }

    public function simpan_kategori($data = null)
    {
        $this->db->insert('kategori_layanan', $data);
    }

    function edit_kategori($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function ubah_kategori($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function hapus_kategori($data)
    {
        $this->db->where('id_kategori', $data);
        $this->db->delete('kategori_layanan');
    }

    function ambil()
    {
        $query = $this->db->query("SELECT * FROM kategori_layanan ORDER BY nama_kategori ASC");
        return $query->result();
    }
}
