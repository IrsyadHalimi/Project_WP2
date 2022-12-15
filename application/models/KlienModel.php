<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KlienModel extends CI_Model
{
    public function tampilkan_klien()
    {
        $this->db->select('*');
        $this->db->from('klien');
        $this->db->order_by('nama_depan_klien');
        $query = $this->db->get();
        return $query;
    }
    public function simpanData($data = null)
    {
        $this->db->insert('klien', $data);
    }

    public function jumlah_klien()
    {
        $query = $this->db->get('klien');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function simpan_klien($data = null)
    {
        $this->db->insert('klien', $data);
    }

    //     public function getUserWhere($where = null)
    //     {
    //         return $this->db->get_where('klien', $where);
    //     }
}
