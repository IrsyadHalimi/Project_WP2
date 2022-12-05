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

    public function simpan_layanan($data = null)
    {
        $this->db->insert('layanan', $data);
    }

    function hapus_layanan($data)
    {
        $this->db->where('id_layanan', $data);
        $this->db->delete('layanan');
    }
}
