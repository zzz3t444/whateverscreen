###################
What is CodeIgniter
###################

CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP. Its goal is to enable you to develop projects
much faster than you could if you were writing code from scratch, by providing
a rich set of libraries for commonly needed tasks, as well as a simple
interface and logical structure to access these libraries. CodeIgniter lets
you creatively focus on your project by minimizing the amount of code needed
for a given task.

*******************
Release Information
*******************

This repo contains in-development code for future releases. To download the
latest stable release please visit the `CodeIgniter Downloads
<https://codeigniter.com/download>`_ page.

**************************
Changelog and New Features
**************************

You can find a list of all changes for each release in the `user
guide change log <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/changelog.rst>`_.

*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************

Please see the `installation section <https://codeigniter.com/userguide3/installation/index.html>`_
of the CodeIgniter User Guide.

*******
License
*******

Please see the `license
agreement <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.

*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Contributing Guide <https://github.com/bcit-ci/CodeIgniter/blob/develop/contributing.md>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community Slack Channel <https://codeigniterchat.slack.com>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.

***************
Acknowledgement
***************

The CodeIgniter team would like to thank EllisLab, all the
contributors to the CodeIgniter project and you, the CodeIgniter user.




code lama /models/Movie_model.php :
-------
<?php

class Movie_model extends CI_Model
{

    private $_table = 'movie';

    public function get($limit = null, $offset = null)
    {
        $query = $this->db->get($this->_table, $limit, $offset);
        return $query->result();
    }

    public function get_published($limit = null, $offset = null)
    {
        if (!$limit && $offset) {
            $query = $this->db
                ->get_where($this->_table, ['draft' => 'FALSE']);
        } else {
            $query =  $this->db
                ->get_where($this->_table, ['draft' => 'FALSE'], $limit, $offset);
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
        $this->db->like('judul_film', $keyword);
        $this->db->or_like('deskripsis', $keyword);
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
            ]
        ];
    }
}
---------------------------------------------
code lama dari controller/admin/post.php :
---------------------------------------------
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
        $config['per_page'] = 2;

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
        $this->load->library('form_validation');
        if ($this->input->method() === 'post') {
            // TODO: Lakukan validasi sebelum menyimpan ke model
            $rules = $this->movie_model->rules();
            $this->form_validation->set_rules($rules);

            $file_name = str_replace('.', '', $data['current_user']->id);
			$config['upload_path']          = FCPATH . '/upload/gambar/';
			$config['allowed_types']        = 'gif|jpg|jpeg|png';
			$config['file_name']            = $file_name;
			$config['overwrite']            = true;
			$config['max_size']             = 1024; // 1MB
			$config['max_width']            = 1080;
			$config['max_height']           = 1080;

            $this->load->library('upload', $config);

            if ($this->form_validation->run() === FALSE) {
                return $this->load->view('admin/post_new_form.php', $data);
            }

            if (!$this->upload->do_upload('avatar')) {
				$data['error'] = $this->upload->display_errors();
			} else {
				$uploaded_data = $this->upload->data();

				$new_data = [
					'id' => $data['current_user']->id,
					'avatar' => $uploaded_data['file_name'],
				];
			}

            // generate unique id and slug
            $id = uniqid('', true);
            $slug = url_title($this->input->post('title'), 'dash', TRUE) . '-' . $id;

            $movie = [
                'id' => $id,
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'content' => $this->input->post('content'),
                'draft' => $this->input->post('draft')
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
            // TODO: lakukan validasi data sebelum simpan ke model
            $rules = $this->movie_model->rules();
            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run() === FALSE) {
                return $this->load->view('admin/post_edit_form.php', $data);
            }

            $movie = [
                'id' => $id,
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content'),
                'draft' => $this->input->post('draft')
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

        $deleted = $this->movie_model->delete($id);
        if ($deleted) {
            $this->session->set_flashdata('message', 'movie was deleted');
            redirect('admin/post');
        }
    }
}
------------------------------------------------------------------------------


// File: application/controllers/Upload.php

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        $this->load->view('post_new_form', array('error' => ' ' ));
    }

    public function do_upload() {
        $config['upload_path']   = './upload/gambar/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = 100;
        $config['max_width']     = 1024;
        $config['max_height']    = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('post_new_form', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            return redirect('admin/post', $data);
        }
    }
}
?>
