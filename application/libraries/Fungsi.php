<?php

class Fungsi
{
    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    function user_login()
    {
        $this->ci->load->model('ModelUser');
        $user_id = $this->ci->session->userdata('id');
        $user_data = $this->ci->ModelUser->get($user_id)->row();
        return $user_data;
    }
}
