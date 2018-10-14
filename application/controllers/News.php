<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $st = new Stencil();
        $this->load->model('home_model');
        // $this->load->model('rsvp_model');
        $st->layout('login_layout');
        $this->load->library('pagination');
    }

    public function index() {
        $this->session->set_userdata("last_url", "home");
        $common['title'] = 'News';
        $common['profile'] = $this->home_model->get_profile();
        $common['slider'] = $this->home_model->get_slider_home();
        $common['news_latest'] = $this->home_model->get_news_latest();
        $common['kategori'] = $this->home_model->get_kategori();
        $common['branch'] = $this->home_model->get_branch();
		
		$config['base_url'] = site_url('news/index/');
        $rows = $this->db->query('SELECT * FROM data_news ORDER BY news_date DESC')->result();
        $config['total_rows'] = count($rows);
        $config['per_page'] = 5;
        $config['use_page_numbers'] = FALSE;
        $config['num_links'] = 7;
        $config['next_link'] = '<i class="fa fa-fw fa-forward"></i>';
        $config['prev_link'] = '<i class="fa fa-fw fa-backward"></i>';
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $this->session->set_userdata("last_url", "news");
        if (is_numeric($this->uri->segment(3)) && $this->uri->segment(3) != '') {
            $page = ($this->uri->segment(3));
        } else {
            $page = 0;
        }
        $common['news'] = $this->db->query('SELECT * FROM data_news '
                        . ' ORDER BY news_date DESC LIMIT ' . $page . ',' . $config['per_page'])->result();
        $st = new Stencil();
        $st->layout('menu_layout');
        $st->slice('head');
        $st->paint('news_view', $common);
    }

}
