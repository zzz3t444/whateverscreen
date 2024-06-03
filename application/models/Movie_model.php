<?php

class Movie_model extends CI_Model
{

    private $_table = 'tb_movie';

    public function get($limit = null, $offset = null)
    {
        $query = $this->db->get($this->_table, $limit, $offset);
        return $query->result();
    }

    public function get_published($limit = null, $offset = null)
    {
        if (!$limit && $offset) {
            $query = $this->db
                ->get_where($this->_table, ['draft' => '']);
        } else {
            $query =  $this->db
                ->get_where($this->_table, ['draft' => ''], $limit, $offset);
        }
        return $query->result();
    }

    public function get_published_count()
    {
        $query = $this->db->get_where($this->_table, ['draft' => 'FALSE']);
        return $query->num_rows();
    }

    public function find_by_slug($slug)
    {
        if (!$slug) {
            return;
        }
        $query = $this->db->get_where($this->_table, ['slug' => $slug]);
        return $query->row();
    }

    public function find($id)
    {
        if (!$id) {
            return;
        }

        $query = $this->db->get_where($this->_table, array('id' => $id));
        return $query->row();
    }

    public function search($keyword)
    {
        if (!$keyword) {
            return null;
        }
        $this->db->like('title', $keyword);
        $this->db->or_like('content', $keyword);
        $query = $this->db->get($this->_table);
        return $query->result();
    }

    public function insert($movie)
    {
        return $this->db->insert($this->_table, $movie);
    }

    public function update($movie)
    {
        if (!isset($movie['id'])) {
            return;
        }

        return $this->db->update($this->_table, $movie, ['id' => $movie['id']]);
    }

    public function delete($id)
    {
        if (!$id) {
            return;
        }

        return $this->db->delete($this->_table, ['id' => $id]);
    }

    public function count()
    {
        return $this->db->count_all($this->_table);
    }

    public function rules()
    {
        return [
            [
                'field' => 'title',
                'label' => 'Title',
                'rules' => 'required|max_length[128]'
            ],
            [
                'field' => 'draft',
                'label' => 'Draft',
                'rules' => 'required|in_list[true,false]'
            ],
            [
                'field' => 'content',
                'label' => 'Content',
                'rules' => '' // <-- rules dikosongkan
            ],
            [
                'field' => 'deskripsi',
                'label' => 'Deskripsi',
                'rules' => 'required|max_length[50]'
            ],
            [
                'field' => 'genre',
                'label' => 'Genre',
                'rules' => 'required|max_length[50]'
            ],
            [
                'field' => 'katagori_umur',
                'label' => 'katagori_umur',
                'rules' => 'required|max_length[20]'
            ],
            [
                'field' => 'casting',
                'label' => 'Cast',
                'rules' => ''
            ],
            [
                'field' => 'url',
                'label' => 'url',
                'rules' => ''
            ],
        ];
    }
}
