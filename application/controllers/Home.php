<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata('error', 'Kamu harus login terlebih dahulu.');
            redirect('login');
        }
    }

    public function index() 
    {
        $data['judul'] = 'Halaman Home';

        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
}