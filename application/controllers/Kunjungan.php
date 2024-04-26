<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kunjungan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata('error', 'Kamu harus login terlebih dahulu.');
            redirect('login');
        }
        $this->load->model('Kunjungan_model');
    }

    public function index() 
    {
        $data['judul'] = 'Daftar Kunjungan';
        $data['kunjungan'] = $this->Kunjungan_model->getJoinedData();

        $this->load->view('templates/header', $data);
        $this->load->view('kunjungan/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Kunjungan';
        $data['pasien'] = $this->Kunjungan_model->getAllPasien();
        $data['dokter'] = $this->Kunjungan_model->getAllDokter();
        $data['poli'] = $this->Kunjungan_model->getAllPoli();

        $this->form_validation->set_rules('id_pasien', 'ID Pasien', 'required');
        $this->form_validation->set_rules('id_dokter', 'ID Dokter', 'required');
        $this->form_validation->set_rules('id_poli', 'ID Poli', 'required');
        $this->form_validation->set_rules('tanggal_kunjungan', 'Tanggal Kunjungan', 'required|date');
        $this->form_validation->set_rules('keluhan', 'ID Pasien', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('kunjungan/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kunjungan_model->tambahDataKunjungan();
            $this->session->set_flashdata('flash', 'ditambahkan!');
            redirect('kunjungan');
        }
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Kunjungan';
        $data['kunjungan'] = $this->Kunjungan_model->getKunjunganById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('kunjungan/detail', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Kunjungan_model->hapusDataKunjungan($id);
        $this->session->set_flashdata('flash', 'dihapus!');
        redirect('kunjungan');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Kunjungan';
        $data['kunjungan'] = $this->Kunjungan_model->getKunjunganById($id);
        $data['pasien'] = $this->Kunjungan_model->getAllPasien();
        $data['dokter'] = $this->Kunjungan_model->getAllDokter();
        $data['poli'] = $this->Kunjungan_model->getAllPoli();


        $this->form_validation->set_rules('id_pasien', 'ID Pasien', 'required');
        $this->form_validation->set_rules('id_dokter', 'ID Dokter', 'required');
        $this->form_validation->set_rules('id_poli', 'ID Poli', 'required');
        $this->form_validation->set_rules('tanggal_kunjungan', 'Tanggal Kunjungan', 'required|date');
        $this->form_validation->set_rules('keluhan', 'ID Pasien', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('kunjungan/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kunjungan_model->ubahDataKunjungan();
            $this->session->set_flashdata('flash', 'diubah!');
            redirect('kunjungan');
        }
    }
}