<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Register_model');
    }

	public function index()
	{
		$data['judul'] = 'Register';

		$this->load->view('templates/header', $data);
		$this->load->view('auth/register');
		$this->load->view('templates/footer');
	}

	public function register()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = [
			'username' => $username,
			'password' => md5($password)
		];

		$this->Register_model->insert($data);
		$this->session->set_flashdata('success', 'Registrasi berhasil! Silakan login.');
		redirect('login');
	}
}
