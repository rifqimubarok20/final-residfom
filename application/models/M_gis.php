<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_gis extends CI_Model
{

    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_gis');
        return $this->db->get()->result();
    }

    function get_data_gis($table_name)
    {
        $get_user = $this->db->get($table_name);
        return $get_user->result_array();
    }

    function get_gisid($table_name, $where, $id)
    {
        $this->db->where($where, $id);
        $edit = $this->db->get($table_name);
        return $edit->result_array();
    }

    function get_gisid_edit($table_name, $where, $id)
    {
        $this->db->where($where, $id);
        $edit = $this->db->get($table_name);
        return $edit->row();
    }


    function insertGis($table_name, $data)
    {
        $tambah = $this->db->insert($table_name, $data);
        return $tambah;
    }

    function update_gis($table_name, $where, $data)
    {
        $this->db->where($where);
        $update = $this->db->update($table_name, $data);
        return $update;
    }

    function delete_gis($table_name, $where, $id)
    {
        $this->db->where($where, $id);
        $hapus = $this->db->delete($table_name);
        return $hapus;
    }


    function edit_gis($table_name, $where, $id)
    {
        $this->db->where($where, $id);
        $edit = $this->db->get($table_name);
        return $edit->row();
    }

    function CountGisId($table_name, $where, $id)
    {
        $this->db->where($where, $id);
        $Count = $this->db->get($table_name);
        return $Count->num_rows();
    }
}
