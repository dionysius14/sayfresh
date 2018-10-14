<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ourproduct extends CI_Controller {

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
        $common['title'] = 'Produk';
        $common['kategori'] = $this->home_model->get_kategori();
        $common['branch'] = $this->home_model->get_branch();
        $common['profile'] = $this->home_model->get_profile();
        // $id = $this->input->get('id');
        
        $config['base_url'] = site_url('ourproduct/index/');
		$kategori_id = $this->session->userdata('kategori_id');
		if($kategori_id != ''){
			$rows = $this->db->query('SELECT * FROM data_produk WHERE kategori_id = '.$kategori_id.' ORDER BY produk_id DESC')->result();
			$common['nama_kategori'] = $this->home_model->get_kategori_by_id($kategori_id)->kategori_nama;			
		}else{
			$rows = $this->db->query('SELECT * FROM data_produk ORDER BY produk_id DESC')->result();
			$common['nama_kategori'] = "All Products";		
		}
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
		if($kategori_id != ''){
			$common['produk'] = $this->db->query('SELECT * FROM data_produk WHERE kategori_id = '.$kategori_id.' ORDER BY produk_id DESC LIMIT ' . $page . ',' . $config['per_page'])->result();
			
		}else{
			$common['produk'] = $this->db->query('SELECT * FROM data_produk ORDER BY produk_id DESC LIMIT ' . $page . ',' . $config['per_page'])->result();
			
		}
        $st = new Stencil();
        $st->layout('menu_layout');
        $st->slice('head');
        $st->paint('ourproduct_view', $common);
    }
    public function setkategori(){
        $id = $this->input->get('id');
        $this->session->set_userdata('kategori_id',$id);
        redirect('ourproduct');
    }
    public function search(){
        $keyword = $this->input->post('filter');
        $this->session->set_userdata('keyword',$keyword);
        // echo $keyword;
        redirect('searchproduct');
    }
    public function clearsearch(){
		$this->session->unset_userdata('keyword');
        // echo $keyword;
        redirect('ourproduct');
    }

}
