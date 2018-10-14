<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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
    }

    public function index() {
        $this->session->set_userdata("last_url", "home");
        $common['title'] = 'Profile';
        $common['profile'] = $this->home_model->get_profile();
        $common['slider'] = $this->home_model->get_slider_profile();
        $common['kategori'] = $this->home_model->get_kategori();
        $common['branch'] = $this->home_model->get_branch();
        $st = new Stencil();
        $st->layout('menu_layout');
        $st->slice('head');
        $st->paint('profile_view', $common);
    }

}
