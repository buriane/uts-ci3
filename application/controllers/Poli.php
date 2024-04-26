<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poli extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata('error', 'Kamu harus login terlebih dahulu.');
            redirect('login');
        }
        $this->load->model('Poli_model');
    }

    public function index() 
    {
        $data['judul'] = 'Daftar Poli';
        $data['poli'] = $this->Poli_model->getAllPoli();

        $this->load->view('templates/header', $data);
        $this->load->view('poli/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Poli';

        $this->form_validation->set_rules('nama_poli', 'Nama Poli', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('poli/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Poli_model->tambahDataPoli();
            $this->session->set_flashdata('flash', 'ditambahkan!');
            redirect('poli');
        }
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Poli';
        $data['poli'] = $this->Poli_model->getPoliById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('poli/detail', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Poli_model->hapusDataPoli($id);
        $this->session->set_flashdata('flash', 'dihapus!');
        redirect('poli');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Poli';
        $data['poli'] = $this->Poli_model->getPoliById($id);

        $this->form_validation->set_rules('nama_poli', 'Nama Poli', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('poli/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Poli_model->ubahDataPoli();
            $this->session->set_flashdata('flash', 'diubah!');
            redirect('poli');
        }
    }
}