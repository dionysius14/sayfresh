<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

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
        $st->layout('login_layout');
    }

    public function index() {
        $this->session->set_userdata("last_url", "landing");
        $common['title'] = 'Nurani Jaya';
        $st = new Stencil();
        $st->layout('landing_layout');
        $st->slice('head_login');
        $common['js_files'] = '';//$this->db->query('SELECT * FROM data_user WHERE is_delete is null')->result();
        $common['css_files'] = '';//$this->db->query('SELECT * FROM data_user WHERE is_delete is null')->result();
//        $st->data($data);
        $st->paint('landing_view', $common);
    }

}
