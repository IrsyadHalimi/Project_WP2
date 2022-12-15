<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LayananModel extends CI_Model
{
    public function jumlah_layanan()
    {
        $query = $this->db->get('layanan');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function tampilkan_layanan()
    {
        $result = $this->db->get('layanan');
        return $result;
    }

    function join_layanan()
    {
        $this->db->select('*');
        $this->db->from('layanan');
        $this->db->join('kategori_layanan', 'kategori_layanan.id_kategori=layanan.id_kategori');
        $query = $this->db->get();
        return $query->result();
    }

    public function simpan_layanan($data = null)
    {
        $this->db->insert('layanan', $data);
    }

    function edit_layanan($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function ubah_layanan($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function hapus_layanan($data)
    {
        $this->db->where('id_layanan', $data);
        $this->db->delete('layanan');
    }

    function ambil()
    {
        $query = $this->db->query("SELECT * FROM kategori_layanan ORDER BY nama_kategori ASC");
        return $query->result();
    }

    function ambil2()
    {
        $query = $this->db->query("SELECT * FROM layanan ORDER BY nama_layanan ASC");
        return $query->result();
    }
}
