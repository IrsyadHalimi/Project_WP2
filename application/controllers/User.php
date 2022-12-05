<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('wp2');
    }
    public function index()
    {
        $data['judul'] = 'Profil Saya';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/templates/navbar',);
        $this->load->view('user/index', $data);
        $this->load->view('user/templates/footer');
    }
}
