<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

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
        $this->session->set_userdata("last_url", "contact");
        $common['title'] = 'Detail Product';
        $common['profile'] = $this->home_model->get_profile();
        $common['slider'] = $this->home_model->get_slider_home();
        $common['kategori'] = $this->home_model->get_kategori();
        $common['branch'] = $this->home_model->get_branch();
        $common['detail'] = $this->db->query('SELECT * FROM data_produk WHERE produk_id = '.$this->session->userdata('produk_id').'')->row();
        $st = new Stencil();
        $st->layout('menu_layout');
        $st->slice('head');
        $st->paint('detail_view', $common);
    }

}
