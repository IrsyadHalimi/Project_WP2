<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KaryawanModel extends CI_Model
{
    public function jumlah_karyawan()
    {
        $query = $this->db->get('karyawan');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function tampilkan_karyawan()
    {
        $result = $this->db->get('karyawan');
        return $result;
    }

    public function simpan_karyawan($data = null)
    {
        $this->db->insert('karyawan', $data);
    }

    function edit_karyawan($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function ubah_karyawan($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function hapus_karyawan($data)
    {
        $this->db->where('id_karyawan', $data);
        $this->db->delete('karyawan');
    }

    function ambil()
    {
        $query = $this->db->query("SELECT * FROM karyawan ORDER BY nama_depan ASC");
        return $query->result();
    }
}
