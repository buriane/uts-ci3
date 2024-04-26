<?php
class Dokter_model extends CI_Model {
    public function getAllDokter() 
    {
        $query = $this->db->get('dokter');
        return $query->result_array();
    }

    public function tambahDataDokter()
    {
        $data = [
            "nama_dokter" => $this->input->post('nama_dokter', true),
        ];
        $this->db->insert('dokter', $data);
    }

    public function getDokterById($id)
    {
        return $this->db->get_where('dokter', ['id_dokter' => $id])->row_array();
    }

    public function hapusDataDokter($id)
    {
        $this->db->delete('dokter', ['id_dokter' => $id]);
    }

    public function ubahDataDokter()
    {
        $data = [
            "nama_dokter" => $this->input->post('nama_dokter', true),
        ];
        $this->db->where('id_dokter', $this->input->post('id_dokter'));
        $this->db->update('dokter', $data);
    }
}