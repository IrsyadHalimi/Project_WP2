<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BookingModel extends CI_Model
{
    public function jumlah_antrian()
    {
        $query = $this->db->get('booking');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function antrian_selanjutnya($id)
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->join('karyawan', 'karyawan.id_karyawan=booking.id_karyawan');
        $this->db->join('layanan', 'layanan.id_layanan=layanan_sudah_dibooking.id_layanan');
        $this->db->where($id);
        $query = $this->db->get();
        return $query->result();
    }

    public function join_booking($aktif)
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->join('karyawan', 'karyawan.id_karyawan=booking.id_karyawan');
        $this->db->join('klien', 'klien.id_klien=booking.id_klien');
        $this->db->where($aktif);
        $query = $this->db->get();
        return $query->result();
    }
}
