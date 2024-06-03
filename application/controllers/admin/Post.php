<?php

class Post extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('movie_model');
        $this->load->model('auth_model');
        if (!$this->auth_model->current_user()) {
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['current_user'] = $this->auth_model->current_user();

        $this->load->library('pagination');

        $config['base_url'] = site_url('/admin/post');
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->movie_model->count();
        $config['per_page'] = 10;

        $config['full_tag_open'] = '<div class="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);
        $limit = $config['per_page'];
        $offset = html_escape($this->input->get('per_page'));

        $data['movies'] = $this->movie_model->get($limit, $offset);

        $data['keyword'] = $this->input->get('keyword');

        if (!empty($this->input->get('keyword'))) {
            $data['movies'] = $this->movie_model->search($data['keyword']);
        }

        if (count($data['movies']) <= 0 && !$this->input->get('keyword')) {
            $this->load->view('admin/post_empty.php', $data);
        } else {
            $this->load->view('admin/post_list.php', $data);
        }
    }

    public function new()
    {
        $data['current_user'] = $this->auth_model->current_user();
        if ($this->input->method() === 'post') {
            $config['max_size'] = 2048;
            $config['allowed_types'] = "png|jpg|jpeg|gif";
            $config['remove_spaces'] = TRUE;
            $config['encrypt_name'] = TRUE;
            $config['upload_path'] = FCPATH . 'upload/gambar';

            $this->load->library('upload');
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('testing')) {
                echo  $this->upload->display_errors();
            } else {
                $uploaded_data = $this->upload->data();
                echo 'success';
            }

            $data['current_user'] = $this->auth_model->current_user();
            $this->load->library('form_validation');
            $rules = $this->movie_model->rules();
            $this->form_validation->set_rules($rules);

            // generate unique id and slug
            $id = uniqid('', true);
            $slug = url_title($this->input->post('title'), 'dash', TRUE) . '-' . $id;

            $movie = [
                'id' => $id,
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'content' => $this->input->post('content'),
                'draft' => $this->input->post('draft'),
                'deskripsi' => $this->input->post('deskripsi'),
                'genre' => $this->input->post('genre'),
                'katagori_umur' => $this->input->post('katagori_umur'),
                'casting' => $this->input->post('casting'),
                'gambar' => $uploaded_data['file_name'],
                'url' => $this->input->post('url')
            ];

            $saved = $this->movie_model->insert($movie);

            if ($saved) {
                $this->session->set_flashdata('message', 'movie was created');
                return redirect('admin/post');
            }
        }

        $this->load->view('admin/post_new_form.php', $data);
    }

    public function edit($id = null)
    {
        $data['current_user'] = $this->auth_model->current_user();
        $data['movie'] = $this->movie_model->find($id);
        $this->load->library('form_validation');

        if (!$data['movie'] || !$id) {
            show_404();
        }

        if ($this->input->method() === 'post') {
            // FILE UPLOAD
            $config['max_size'] = 2048;
            $config['allowed_types'] = "png|jpg|jpeg|gif";
            $config['remove_spaces'] = TRUE;
            $config['encrypt_name'] = TRUE;
            $config['upload_path'] = FCPATH . 'upload/gambar';

            $this->load->library('upload');
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('gambar')) {
                echo  $this->upload->display_errors();
            } else {
                $uploaded_data = $this->upload->data();
                echo 'success';
            }

            // TODO: lakukan validasi data sebelum simpan ke model
            $rules = $this->movie_model->rules();
            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run() === FALSE) {
                return $this->load->view('admin/post_edit_form.php', $data);
            }

            // Handle file upload
            // $config['upload_path'] = './uploads/';
            // $config['allowed_types'] = 'gif|jpg|png';
            // $this->load->library('upload', $config);

            // if ($this->upload->do_upload('gambar')) {
            //     $gambar = $this->upload->data('file_name');
            // } else {
            //     $gambar = $data['movie']->gambar;
            // }

            $movie = [
                'id' => $id,
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content'),
                'draft' => '',
                'deskripsi' => $this->input->post('deskripsi'),
                'genre' => $this->input->post('genre'),
                'katagori_umur' => $this->input->post('katagori_umur'),
                'casting' => $this->input->post('casting'),
                'gambar' => $uploaded_data['file_name'],
                'url' => $this->input->post('url')
            ];
            $updated = $this->movie_model->update($movie);
            if ($updated) {
                $this->session->set_flashdata('message', 'movie was updated');
                redirect('admin/post');
            }
        }

        $this->load->view('admin/post_edit_form.php', $data);
    }


    public function delete($id = null)
    {
        if (!$id) {
            show_404();
        }

        $movie = $this->movie_model->find($id);

        if ($movie && file_exists(FCPATH . 'upload/gambar/' . $movie->gambar)) {
            unlink(FCPATH . 'upload/gambar/' . $movie->gambar);
        }

        $deleted = $this->movie_model->delete($id);
        if ($deleted) {
            $this->session->set_flashdata('message', 'movie was deleted');
            redirect('admin/post');
        }
    }
}
