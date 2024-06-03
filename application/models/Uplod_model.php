<?php

class Uplod_model extends CI_Model{
    public function Uplod_view()
    {
        return $this->db->get('tb_movie');
    }
}