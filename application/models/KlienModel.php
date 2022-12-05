<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KlienModel extends CI_Model
{
    public function tampilkan_klien()
    {
        $result = $this->db->get('klien');
        return $result;
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

    //     public function getUserWhere($where = null)
    //     {
    //         return $this->db->get_where('klien', $where);
    //     }
}
