<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata('error', 'Kamu harus login terlebih dahulu.');
            redirect('login');
        }
        $this->load->model('Dokter_model');
    }

    public function index() 
    {
        $data['judul'] = 'Daftar Dokter';
        $data['dokter'] = $this->Dokter_model->getAllDokter();

        $this->load->view('templates/header', $data);
        $this->load->view('dokter/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Dokter';

        $this->form_validation->set_rules('nama_dokter', 'Nama Dokter', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('dokter/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Dokter_model->tambahDataDokter();
            $this->session->set_flashdata('flash', 'ditambahkan!');
            redirect('dokter');
        }
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Dokter';
        $data['dokter'] = $this->Dokter_model->getDokterById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('dokter/detail', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Dokter_model->hapusDataDokter($id);
        $this->session->set_flashdata('flash', 'dihapus!');
        redirect('dokter');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Dokter';
        $data['dokter'] = $this->Dokter_model->getDokterById($id);

        $this->form_validation->set_rules('nama_dokter', 'Nama Dokter', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('dokter/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Dokter_model->ubahDataDokter();
            $this->session->set_flashdata('flash', 'diubah!');
            redirect('dokter');
        }
    }
}