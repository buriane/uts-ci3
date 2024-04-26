<?php
class Pasien_model extends CI_Model {
    public function getAllPasien() 
    {
        $query = $this->db->get('pasien');
        return $query->result_array();
    }

    public function tambahDataPasien()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
            "alamat" => $this->input->post('alamat', true),
        ];
        $this->db->insert('pasien', $data);
    }

    public function getPasienById($id)
    {
        return $this->db->get_where('pasien', ['id_pasien' => $id])->row_array();
    }

    public function hapusDataPasien($id)
    {
        $this->db->delete('pasien', ['id_pasien' => $id]);
    }

    public function ubahDataPasien()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
            "alamat" => $this->input->post('alamat', true),
        ];
        $this->db->where('id_pasien', $this->input->post('id_pasien'));
        $this->db->update('pasien', $data);
    }
}