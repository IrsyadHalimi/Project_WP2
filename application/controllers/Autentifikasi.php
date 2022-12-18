<?php

class Autentifikasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelUser');
    }
    public function index()
    {

        if ($this->session->userdata('email')) {
            redirect('booking');
        }

        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email', [
            'required'  => 'Email Harus diisi!!',
            'valid_email' => 'Email Salah!'
        ]);

        $this->form_validation->set_rules('password', 'password', 'required|trim', [
            'required' => 'Password Harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Sibershop | Login';
            $data['user'] = '';
            $this->load->view('auth/login', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = htmlspecialchars($this->input->post('email', true));

        $password = $this->input->post('password', true);

        $user = $this->ModelUser->cekData(['email' => $email])->row_array();


        if ($user) {

            if ($user['is_active'] == 1) {

                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);

                    if ($user['role_id'] == 1) {
                        redirect('Admin/Admin');
                    } else {
                        if ($user['image'] == 'default.jpg') {
                            $this->session->set_flashdata('pesan', '<div class="alert alert-info alert-message" role="alert">Silahkan Ubah Profile Anda untuk Ubah Photo Profil</div>');
                        }
                        redirect('booking');
                    }
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert message" role="alert">Password Salah!</div>');
                    redirect('autentifikasi');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert message" role="alert">User belum diaktivasi</div>');
                redirect('autentifikasi');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert message" role="alert">Email tidak terdaftar!!</div>');
            redirect('autentifikasi');
        }
    }
    public function blok()
    {
        $this->load->view('blok');
    }
    public function gagal()
    {
        $this->load->view('autentifikasi/gagal');
    }
    public function registrasi()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules(
            'name',
            'Nama Lengkap',
            'required',
            ['required' => 'Nama Belum diisi!']
        );

        $this->form_validation->set_rules(
            'email',
            'Alamat Email',
            'required|trim|valid_email|is_unique[user.email]',
            [
                'valid_email' => 'Email Tidak Benar!!',
                'required' => 'Email Belum diisi!!',
                'is_unique' => 'Email Sudah Terdaftar!'
            ]
        );

        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[3]|matches[password2]',
            [
                'required' => 'Kata sandi belum diisi',
                'matches' => 'Kata sandi tidak sama!!',
                'min_length' => 'Kata sandi terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'password2',
            'Repeat Password',
            'required|trim|matches[password1]',
            ['matches' => 'Kata sandi tidak sama!!']
        );

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registrasi';
            $this->load->view('auth/registrasi', $data);
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nama' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT), 'role_id' => 2,
                'is_active' => 1,
                'tanggal_input' => time()
            ];
            $this->ModelUser->simpanData($data);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Selamat!! akun anda sudah dibuat. Silahkan Aktivasi Akun anda</div>');
            redirect('autentifikasi');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Anda telah berhasil Logout!</div>');
        redirect('autentifikasi');
    }
}
