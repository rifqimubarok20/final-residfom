<?php

class Warga_model extends CI_model
{

    // public function getAllWarga() {
    //     return $query = $this->db->get('warga')->result_array();
    // }

    public function getAllWarga($limit, $start)
    {
        return $this->db->get('warga', $limit, $start)->result_array();
    }

    public function getAll()
    {
        $query = $this->db->get('warga');
        return $query;
    }

    public function countAllWarga()
    {
        return $this->db->get('warga')->num_rows();
    }

    public function createDataWarga()
    {
        $data = array(
            'nama' => $this->input->post('nama', true),
            'tgl_lahir' => $this->input->post('tgl_lahir', true),
            'jk' => $this->input->post('jk', true),
            'alamat' => $this->input->post('alamat', true)
        );

        $this->db->insert('warga', $data);
    }

    public function deleteDataWarga($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('warga');
    }

    public function getWargaById($id)
    {
        return $this->db->get_where('warga', ['id' => $id])->row_array();
    }

    public function updateDataWarga()
    {
        $data = array(
            'nama' => $this->input->post('nama', true),
            'tgl_lahir' => $this->input->post('tgl_lahir', true),
            'jk' => $this->input->post('jk', true),
            'alamat' => $this->input->post('alamat', true)
        );

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('warga', $data);
    }

    public function searchDataWarga()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jk', $keyword);
        $this->db->or_like('tgl_lahir', $keyword);
        $this->db->or_like('alamat', $keyword);
        return $this->db->get('warga')->result_array();
    }

    function total_rows()
    {
        return $this->db->get('warga')->num_rows();
    }
}
?>