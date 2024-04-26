<?php
class Kunjungan_model extends CI_Model {
    public function getAllKunjungan() 
    {
        $query = $this->db->get('kunjungan');
        return $query->result_array();
    }

    public function getAllPasien() 
    {
        $query = $this->db->get('pasien');
        return $query->result_array();
    }

    public function getAllPoli() 
    {
        $query = $this->db->get('poli');
        return $query->result_array();
    }

    public function getAllDokter() 
    {
        $query = $this->db->get('dokter');
        return $query->result_array();
    }

    public function getJoinedData() {
        $this->db->select('
        k.id_kunjungan,
        k.keluhan,
        k.tanggal_kunjungan,
        p.nama AS nama,
        d.nama_dokter AS nama_dokter,
        poli.nama_poli AS nama_poli'
        );
        $this->db->from('kunjungan k');
        $this->db->join('pasien p', 'k.id_pasien = p.id_pasien');
        $this->db->join('dokter d', 'k.id_dokter = d.id_dokter');
        $this->db->join('poli', 'k.id_poli = poli.id_poli');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambahDataKunjungan()
    {
        $data = [
            "id_pasien" => $this->input->post('id_pasien', true),
            "id_dokter" => $this->input->post('id_dokter', true),
            "id_poli" => $this->input->post('id_poli', true),
            "tanggal_kunjungan" => $this->input->post('tanggal_kunjungan', true),
            "keluhan" => $this->input->post('keluhan', true),
        ];
        $this->db->insert('kunjungan', $data);
    }

    public function getKunjunganById($id) 
    {
        $this->db->select('kunjungan.*, pasien.nama AS nama_pasien, dokter.nama_dokter AS nama_dokter, poli.nama_poli AS nama_poli');
        $this->db->from('kunjungan');
        $this->db->join('pasien', 'kunjungan.id_pasien = pasien.id_pasien');
        $this->db->join('dokter', 'kunjungan.id_dokter = dokter.id_dokter');
        $this->db->join('poli', 'kunjungan.id_poli = poli.id_poli');
        $this->db->where('id_kunjungan', $id);
        $query = $this->db->get();
    
        return $query->row_array();
    }

    public function hapusDataKunjungan($id)
    {
        $this->db->delete('kunjungan', ['id_kunjungan' => $id]);
    }

    public function ubahDataKunjungan()
    {
        $data = [
            "id_pasien" => $this->input->post('id_pasien', true),
            "id_dokter" => $this->input->post('id_dokter', true),
            "id_poli" => $this->input->post('id_poli', true),
            "tanggal_kunjungan" => $this->input->post('tanggal_kunjungan', true),
            "keluhan" => $this->input->post('keluhan', true),
        ];
        $this->db->where('id_kunjungan', $this->input->post('id_kunjungan'));
        $this->db->update('kunjungan', $data);
    }
}