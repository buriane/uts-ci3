<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata('error', 'Kamu harus login terlebih dahulu.');
            redirect('login');
        }
        $this->load->model('Pasien_model');
    }

    public function index() 
    {
        $data['judul'] = 'Daftar Pasien';
        $data['pasien'] = $this->Pasien_model->getAllPasien();

        $this->load->view('templates/header', $data);
        $this->load->view('pasien/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Pasien';

        $this->form_validation->set_rules('nama', 'Nama Pasien', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|date');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('pasien/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Pasien_model->tambahDataPasien();
            $this->session->set_flashdata('flash', 'ditambahkan!');
            redirect('pasien');
        }
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Pasien';
        $data['pasien'] = $this->Pasien_model->getPasienById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('pasien/detail', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Pasien_model->hapusDataPasien($id);
        $this->session->set_flashdata('flash', 'dihapus!');
        redirect('pasien');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Pasien';
        $data['pasien'] = $this->Pasien_model->getPasienById($id);

        $this->form_validation->set_rules('nama', 'Nama Pasien', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|date');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('pasien/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pasien_model->ubahDataPasien();
            $this->session->set_flashdata('flash', 'diubah!');
            redirect('pasien');
        }
    }
}