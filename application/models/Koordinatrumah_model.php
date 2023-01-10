<?php
defined('BASEPATH') or exit('No direct script access allowed');

class koordinatrumah_model extends CI_Model
{

    public function create($warga, $latitude, $longitude)
    {
        $data = array(
            'rumah_id' => $warga,
            'latitude' => $latitude,
            'longitude' => $longitude
        );
        $query = $this->db->insert('tbl_koordinatrumah', $data);
        return $query;
    }
    public function getAll()
    {
        $this->db->select('*'); //kita akan mengambil semua data
        $this->db->from('tbl_koordinatrumah');
        $this->db->join('warga', 'warga.id = tbl_koordinatrumah.rumah_id'); //kita join tbl jembatan dengan foreign key jembatan_id
        $query = $this->db->get();
        return $query;
    }
    public function read($id)
    {
        $this->db->select('*'); //kita akan mengambil semua data
        $this->db->from('tbl_koordinatrumah');
        $this->db->join('warga', 'warga.id = tbl_koordinatrumah.rumah_id'); //kita join tbl jembatan dengan foreign key jembatan_id
        $this->db->where('id_koordinatrumah', $id);
        $query = $this->db->get();
        return $query;
    }
    public function update($warga, $latitude, $longitude, $id)
    {
        $data = array(
            'rumah_id' => $warga,
            'latitude' => $latitude,
            'longitude' => $longitude
        );
        $this->db->where('id_koordinatrumah', $id);
        $query = $this->db->update('tbl_koordinatrumah', $data);
        return $query;
    }
    public function delete($id)
    {
        $this->db->where('id_koordinatrumah', $id);
        $query = $this->db->delete('tbl_koordinatrumah');
        return $query;
    }
    public function validasi($id)
    {
        $this->db->where('rumah_id', $id);
        $query = $this->db->get('tbl_koordinatrumah');
        return $query;
    }

    function total_rows()
    {
        return $this->db->get('tbl_koordinatrumah')->num_rows();
    }
}
