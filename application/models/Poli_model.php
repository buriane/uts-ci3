<?php
class Poli_model extends CI_Model {
    public function getAllPoli() 
    {
        $query = $this->db->get('poli');
        return $query->result_array();
    }

    public function tambahDataPoli()
    {
        $data = [
            "nama_poli" => $this->input->post('nama_poli', true),
        ];
        $this->db->insert('poli', $data);
    }

    public function getPoliById($id)
    {
        return $this->db->get_where('poli', ['id_poli' => $id])->row_array();
    }

    public function hapusDataPoli($id)
    {
        $this->db->delete('poli', ['id_poli' => $id]);
    }

    public function ubahDataPoli()
    {
        $data = [
            "nama_poli" => $this->input->post('nama_poli', true),
        ];
        $this->db->where('id_poli', $this->input->post('id_poli'));
        $this->db->update('poli', $data);
    }
}