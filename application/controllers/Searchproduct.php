<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Searchproduct extends CI_Controller {

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
        $st->layout('login_layout');
    }
     public function index() {
        $this->session->set_userdata("last_url", "home");
        $common['title'] = 'Produk';
        $common['kategori'] = $this->home_model->get_kategori();
        $common['branch'] = $this->home_model->get_branch();
        $common['profile'] = $this->home_model->get_profile();
     
        $keyword = $this->session->userdata('keyword');
        $config['base_url'] = site_url('searchproduct/index/');
        $rows = $this->db->query('SELECT * FROM data_produk WHERE nama like "%'.$keyword.'%" ORDER BY produk_id DESC')->result();
        $config['total_rows'] = count($rows);
        $config['per_page'] = 10;
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
        $this->session->set_userdata("last_url", "produk");
        if (is_numeric($this->uri->segment(3)) && $this->uri->segment(3) != '') {
            $page = ($this->uri->segment(3));
        } else {
            $page = 0;
        }
        $common['produk'] = $this->db->query('SELECT * FROM data_produk WHERE nama like "%'.$keyword.'%" ORDER BY produk_id DESC LIMIT ' . $page . ',' . $config['per_page'])->result();
        $st = new Stencil();
        $st->layout('menu_layout');
        $st->slice('head');
        $st->paint('searchproduct_view', $common);
    }

}
