<?php

use Model\Movie_model;


class Movie extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('movie_model');
    }

    public function index()
    {
        $this->load->library('pagination');

        $config['base_url'] = site_url('/movie');
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->movie_model->get_published_count();
        $config['per_page'] = 100;

        $config['full_tag_open'] = '<div class="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);
        $limit = $config['per_page'];
        $offset = html_escape($this->input->get('per_page'));

        $data['movies'] = $this->movie_model->get_published($limit, $offset);

        if (count($data['movies']) > 0) {
            $this->load->view('movies/list_movie.php', $data);
        } else {
            $this->load->view('movies/empty_movie.php');
        }
    }

    public function show($slug = null)
    {
        // jika gak ada slug di URL tampilkan 404
        if (!$slug) {
            show_404();
        }
      

        // ambil artikel dengan slug yang diberikan
        $data['movie'] = $this->movie_model->find_by_slug($slug);

        // jika artikel tidak ditemuakn di database tampilkan 404
        if (!$data['movie']) {
            show_404();
        }

       

        // tampilkan artikel
        $this->load->view('movies/show_movie.php', $data);
    }
}
