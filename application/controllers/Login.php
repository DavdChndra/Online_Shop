<?php

Class Login extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
    }

    public function index()
    {
        $this->load->view('v_login');
    }

    public function proses()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if ($this->auth->login_user($username, $password)) {
            redirect(base_url().'index.php/user');
        } else {
            $this->session->set_flashdata('error', 'Username & Password Salah!');
            redirect(base_url().'index.php/login');
        }
    }
    

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('is_login');
        redirect(base_url().'index.php/login');
    }
}

?>