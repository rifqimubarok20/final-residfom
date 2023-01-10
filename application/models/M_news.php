<?php

class M_news extends CI_Model {

    public function get_news($slug = FALSE) {
        if ($slug === FALSE) {
            return $this -> db -> get('tb_news') -> result_array();   
        }
        return $this -> db -> get_where('tb_news', array('slug' => $slug)) -> row();
    }

    public function save_news() {
        $title = $this -> input -> post('title');
        $body = $this -> input -> post('body');

        $slug = url_title($title);

        $data = array (
            "title" => $title,
            "body" => $body,
            "slug" => $slug
        );

        return $this -> db -> insert('tb_news', $data);
    }

    public function delete_news($where, $table) {
        $this -> db -> where($where);
        $this -> db -> delete($table);
    }

    public function edit_news($where, $table) {
        return $this -> db ->get_where($table, $where);
    }

    public function update_news($where, $data, $table) {
        $this -> db -> where($where);
        $this -> db -> update($table, $data);
    }

}

?>