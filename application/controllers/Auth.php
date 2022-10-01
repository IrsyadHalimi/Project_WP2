<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Login Page';
        $this->load->view('templates/auth_header');
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }
    public function registrasi()
    {
        $this->form_validation->set_rules('name', 'nama', 'required|trim', ['required' => 'masukkan nama lengkap']);
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'email ini sudah terdaftar sebelumnya'], ['required' => 'masukkan email']);
        $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[6]|matches[password2]', ['matches' => 'password dont match!']);
        $this->form_validation->set_rules('password2', 'password', 'required|trim|min_length[6]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Registrasi";
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registrasi');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'nama' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];


            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alerts-success" role="alert">Selamat, anda 
            sudah berhasil mendaftar. Silahkan login</div>');
            redirect('auth');
        }
    }
}
