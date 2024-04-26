<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

	public function index()
	{
        $data['judul'] = 'Login';
    
        $this->load->view('templates/header', $data);
		$this->load->view('auth/login');
        $this->load->view('templates/footer');
	}

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->Login_model->getUser($username, $password);

        if ($user) {
            $this->session->set_userdata('logged_in', true);
            $this->session->set_userdata('username', $username);
            redirect('home');
        } else {
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('success', 'Anda telah berhasil logout.');
        redirect('login');
    }
}
