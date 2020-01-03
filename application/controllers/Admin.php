<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
    private $st = NULL;

    public function __construct() {
        parent::__construct();
        $this->st = new Stencil();
        $this->st->layout('admin_layout');
        $this->load->model('user');
        $this->load->model('user');
    }

    public function index() {
        $this->mylib->checkloginadmin();
        $this->session->set_userdata("last_url", "admin");
        redirect('admin/dashboard');
    }

    public function dashboard() {
        $this->mylib->checkloginadmin();
        $common['title'] = 'Dashboard | Web Admin';
        $common['subtitle'] = 'Dashboard';
        $common['js_files'] = '';
        $common['css_files'] = '';
        $st = new Stencil();
        $st->layout('admin_layout');
        $st->slice('head_admin');
        $st->slice('menu_admin');
        $st->slice('footer_admin');
        $st->paint('dashboard_view', $common);
    }

    public function paint_slice($data) {
        $this->mylib->checkloginadmin();
        $this->st->slice('head_admin');
        $this->st->slice('menu_admin');
        $this->st->slice('footer_admin');
        $this->st->paint('admin_view', $data);
    }
    /*DATA MASTER */
    public function role() {
        $this->mylib->checkloginadmin();
        $gc = new grocery_CRUD();
        $gc->set_subject('Data Role');
        $gc->set_table('data_role');
        $gc->change_field_type('role_id', 'invisible');
        $gc->change_field_type('is_delete', 'invisible');
        $gc->display_as('role_nama', 'Role');
        $gc->required_fields('role_nama');
        $gc->columns('role_nama');
        // $gc->unset_print();
        $gc->unset_add();
        $gc->unset_delete();
        $gc->unset_edit();
        $gc->unset_read();
        $output = $gc->render();
        $output->title = 'Data Role | SI AC';
        $output->subtitle = 'Data Role';
        $output->notes = '<p><i></i></p>';
        $this->paint_slice($output);
    }
    public function user() {
        $this->mylib->checkloginadmin();
        $gc = new grocery_CRUD();
        $gc->set_subject('Data User');
        $gc->set_table('data_user');
        $gc->set_relation('role_id', 'data_role', 'role_nama', 'data_role.is_delete=0');
        $gc->change_field_type('user_password', 'password');
        $gc->change_field_type('user_id', 'invisible');
        $gc->change_field_type('is_delete', 'invisible');
        $gc->display_as('role_id', 'Role');
        $gc->display_as('user_name', 'Username');
        $gc->display_as('user_password', 'Password');
        $gc->required_fields('user_name','user_password','role_id');
        $gc->columns('user_name','role_id');
        // $gc->unset_print();
        $gc->unset_read();
        $gc->add_action('Reset Password', '', 'admin/resetpassword', 'fa-history');
        $gc->callback_after_insert(array($this, 'callback_after_insert_user'));
        $output = $gc->render();
        $output->title = 'Data User | SI AC';
        $output->subtitle = 'Data User';
        $output->notes = '<p><i></i></p>';
        $this->paint_slice($output);
    }
    function callback_after_insert_user($post_array,$primary_key)
    {
        $password = md5($post_array['user_password']);
        $this->user->update($password, $primary_key);
    }
    public function resetpassword($primary_key) {
        $user = $this->user->get_by_id($primary_key);
        $password = md5('123456');
        $this->user->update($password, $primary_key);
        echo '<script>'
            . 'alert("Password berhasil direset!");'
            . 'window.location.href = "' . site_url('admin/user') . '";'
            . '</script>';
    }
    public function pelanggan() {
        $this->mylib->checkloginadmin();
        $gc = new grocery_CRUD();
        $gc->set_subject('Data Pelanggan');
        $gc->set_table('data_pelanggan');
        $gc->change_field_type('pelanggan_id', 'invisible');
        $gc->display_as('pelanggan_nama', 'Nama');
        $gc->display_as('pelanggan_alamat', 'Alamat');
        $gc->display_as('pelanggan_kelurahan', 'Kelurahan');
        $gc->display_as('pelanggan_kecamatan', 'Kecamatan');
        $gc->display_as('pelanggan_kab', 'Kabupaten');
        $gc->display_as('pelanggan_gps_lat', 'Latitude');
        $gc->display_as('pelanggan_gps_long', 'Longitude');
        $gc->display_as('pelanggan_wa', 'Kontak WA');
        $gc->display_as('pelanggan_cp', 'Contat Person');
        $gc->display_as('pelanggan_email', 'Email');
        $gc->display_as('pelanggan_keterangan', 'Keterangan');
        $gc->required_fields('pelanggan_nama');
        // $gc->unset_print();
        $output = $gc->render();
        $output->title = 'Data Pelanggan | SI AC';
        $output->subtitle = 'Data Pelanggan';
        $output->notes = '<p><i></i></p>';
        $this->paint_slice($output);
    }
    public function ac() {
        $this->mylib->checkloginadmin();
        $gc = new grocery_CRUD();
        $gc->set_subject('Data AC');
        $gc->set_table('data_ac');
        $gc->set_relation('pelanggan_id', 'data_pelanggan', 'pelanggan_nama');
        $gc->change_field_type('ac_id', 'invisible');
        $gc->change_field_type('is_new', 'true_false');
        $gc->display_as('ac_no', 'ID AC');
        $gc->display_as('is_new', 'Baru');
        $gc->display_as('ac_tipe', 'Type');
        $gc->display_as('ac_merk', 'Merk');
        $gc->display_as('ac_pk', 'PK');
        $gc->display_as('ac_freon', 'Freon');
        $gc->display_as('pelanggan_id', 'Pelanggan');
        $gc->display_as('ac_alamat', 'Alamat');
        $gc->display_as('ac_posisi', 'Posisi AC');
        $gc->required_fields('ac_merk','ac_tipe','ac_pk','ac_freon','pelanggan_id','ac_alamat','ac_posisi','ac_jenis');
        // $gc->unset_print();
        $gc->columns('ac_no','ac_tipe','pelanggan_id', 'ac_merk', 'ac_pk', 'ac_freon', 'ac_alamat', 'ac_posisi','ac_jenis');
        // $gc->callback_after_insert(array($this, 'callback_after_insert_ac'));
        $output = $gc->render();
        $output->title = 'Data AC | SI AC';
        $output->subtitle = 'Data AC';
        $output->notes = '<p><i></i></p>';
        $this->paint_slice($output);
    }
    public function harga() {
        $this->mylib->checkloginadmin();
        $gc = new grocery_CRUD();
        $gc->set_subject('Data Harga');
        $gc->set_table('data_harga');
        $gc->display_as('harga_layanan', 'Layanan');
        $gc->display_as('harga_value', 'Harga');
        $gc->required_fields('harga_layanan','harga_value');
        // $gc->unset_print();
        $gc->columns('harga_layanan','harga_value');
        $output = $gc->render();
        $output->title = 'Data Harga | SI AC';
        $output->subtitle = 'Data Harga';
        $output->notes = '<p><i></i></p>';
        $this->paint_slice($output);
    }
    // function callback_after_insert_ac($post_array,$primary_key)
    // {
    //     $no_order = $this->increment_id();
    //     $data = array(
    //         "no_order" => $no_order,
    //         "pelanggan_id" => $post_array['pelanggan_id'],
    //         "spk_jenis" => $post_array['ac_jenis'],
    //         "ac_id" => $primary_key,
    //         "spk_status" => 'Order',
    //         "created" => date('Y-m-d')
    //     );
     
    //     $this->db->insert('spk',$data);
     
    //     return true;
    // }
    function increment_id(){
        date_default_timezone_set("Asia/Bangkok");
        $last_id = $this->user->get_last_spk_id()->spk_id;
        $check_lenght = strlen((string)$last_id);

        $inc = '';
        if($check_lenght == 1){
            $inc = '00'.$last_id;
        }else if($check_lenght == 2){
            $inc = '0'.$last_id;
        }else if($check_lenght == 0){
            $inc = '001';
        }else{
            $inc = $last_id;
        }
        $order_no = date('dmY').'-'.$inc;

        return $order_no;
    }
    public function teknisi() {
        $this->mylib->checkloginadmin();
        $gc = new grocery_CRUD();
        $gc->set_subject('Data Teknisi');
        $gc->set_table('data_teknisi');
        $gc->set_relation('user_id', 'data_user', 'user_name');
        $gc->change_field_type('teknisi_id', 'invisible');
        $gc->display_as('teknisi_nama', 'Nama');
        $gc->display_as('user_id', 'Username');
        $gc->display_as('teknisi_alamat', 'Alamat');
        $gc->display_as('teknisi_wa', 'Kontak WA');
        $gc->display_as('teknisi_status', 'Status');
        $gc->display_as('teknisi_keterangan', 'Keterangan');
        $gc->required_fields('pelanggan_nama');
        // $gc->unset_print();
        $output = $gc->render();
        $output->title = 'Data Teknisi | SI AC';
        $output->subtitle = 'Data Teknisi';
        $output->notes = '<p><i></i></p>';
        $this->paint_slice($output);
    }
    public function jadwal() {
        $this->mylib->checkloginadmin();
        $gc = new grocery_CRUD();
        $gc->set_subject('Data Jadwal AC');
        $gc->set_table('data_jadwal');
        $gc->set_relation('pelanggan_id', 'data_pelanggan', 'pelanggan_nama');
        $gc->set_relation('ac_id', 'data_ac', 'ac_no');
        $gc->set_relation('ac_id', 'data_ac', 'ac_no');
        $gc->display_as('pelanggan_id', 'Pelanggan');
        $gc->display_as('ac_id', 'AC No');
        $gc->display_as('jadwal_jenis_layanan', 'Jenis Layanan');
        $gc->display_as('jadwal_waktu', 'Jangka Waktu (Hari)');
        // $gc->unset_print();
        $gc->unset_add();
        $gc->unset_edit();
        $output = $gc->render();
        $output->title = 'Data Jadwal AC | SI AC';
        $output->subtitle = 'Data Jadwal AC';
        $output->notes = '<a class="btn btn-success" href="input_jadwal" type="submit">Input Jadwal</a>';
        $this->paint_slice($output);
    }
    public function input_jadwal() {
        $data['title'] = 'Input Jadwal AC | Admin';
        $data['subtitle'] = 'Input Jadwal AC';
        $data['menu'] = 'Input Jadwal AC';
        $data['notes'] = '';
        $data['js_files'] = '';
        $data['css_files'] = '';
        $data['dropdown_pelanggan'] = $this->db->query('SELECT * FROM data_pelanggan ')->result();
        $data['dropdown_ac'] = $this->db->query('SELECT * FROM data_ac ')->result();

        $this->st->layout('admin_layout');
        $this->st->slice('head_admin');
        $this->st->slice('head');
        $this->st->slice('menu_admin');
        $this->st->paint('input_jadwal', $data);
    }
    public function input_jadwal_action() {
        $jenis_layanan = $this->input->post('jenis');
        $pelanggan_id = $this->input->post('pelanggan_id');
        $ac_id = $this->input->post('ac_id');
        $tgl_order = $this->input->post('tgl_order');
        $jangka_waktu = $this->input->post('jangka_waktu');

        if($jenis_layanan == 'cuci'){
            $no_order = $this->increment_id();
            $data = array(
                "no_order" => $no_order,
                "pelanggan_id" => $pelanggan_id,
                "spk_jenis" => $jenis_layanan,
                "ac_id" => $ac_id,
                "spk_status" => 'Order',
                "jangka_waktu" => $jangka_waktu,
                "created" => $tgl_order
            );
            $this->db->insert('spk',$data);
        }else{
            $no_order = $this->increment_id();
            $data = array(
                "no_order" => $no_order,
                "pelanggan_id" => $pelanggan_id,
                "spk_jenis" => $jenis_layanan,
                "ac_id" => $ac_id,
                "spk_status" => 'Order',
                "jangka_waktu" => $jangka_waktu,
                "created" => $tgl_order
            );
            $this->db->insert('spk',$data);
        }
    }
     public function get_ac()
    {
        $this->download = true;
        $pelanggan_id = $this->input->post('pelanggan_id');
        if (!empty($pelanggan_id)) {
            $dropdown_ac = $this->db->query('SELECT * FROM data_ac where pelanggan_id = '.$pelanggan_id.'')->result();
            if ($dropdown_ac != NULL) {
                echo json_encode($dropdown_ac);
            } else {
                echo 0;
            }
        } else {
            echo 0;
        }
    }
    /*DATA MASTER */
    /*SPK */
    public function spk_draft() {
        $this->mylib->checkloginadmin();
        $gc = new grocery_CRUD();
        $gc->set_subject('Draft SPK');
        $gc->set_table('spk');
        // $gc->where('spk.teknisi_id', 0);
        $gc->where('spk.spk_status', 'Order');
        $gc->set_relation('pelanggan_id', 'data_pelanggan', 'pelanggan_nama');
        $gc->set_relation('teknisi_id', 'data_teknisi', 'teknisi_nama');
        $gc->set_relation('ac_id', 'data_ac', 'ac_merk');
        $gc->change_field_type('no_order', 'readonly');
        $gc->field_type('spk_jenis', 'hidden');
        $gc->field_type('is_bayar', 'hidden');
        $gc->display_as('no_order', 'No SPK');
        $gc->display_as('ac_id', 'AC');
        $gc->display_as('is_bayar', 'Status Bayar');
        $gc->display_as('spk_jenis', 'Jenis Layanan');
        $gc->display_as('teknisi_id', 'Teknisi');
        $gc->display_as('pelanggan_id', 'Nama');
        $gc->display_as('spk_status', 'Status');
        $gc->display_as('created', 'Tgl');
        $gc->required_fields('pelanggan_id');
        $gc->callback_before_insert(array($this,'callback_before_insert_spk_draft'));
        $gc->callback_before_update(array($this,'callback_before_update_spk_draft'));
        $gc->unset_print();
        $gc->unset_export();
        $gc->unset_add();
        $gc->columns('created','no_order', 'teknisi_id', 'pelanggan_id','spk_jenis', 'spk_status', 'is_bayar');
        $output = $gc->render();
        $output->title = 'Draft SPK | SI AC';
        $output->subtitle = 'Draft SPK';
        $output->notes = '<p><i></i></p>';
        $this->paint_slice($output);
    }
    function callback_before_insert_spk_draft($post_array) {
        if($post_array['spk_status']== 'Closed'){
            $user = $this->db->query('SELECT * FROM data_user a WHERE a.user_id=' . $this->session->userdata('useradmin'))->row();
            if(isset($user)){
                if($user->role_id != 3){//superadmin or spv
                    $this->session->set_userdata('closed_status',1);
                    return false;
                }else{
                    return true;
                }
            }
        }else{
            return true;
        }
       
    } 
    function callback_before_update_spk_draft($post_array, $primary_key) {
       if($post_array['spk_status']== 'Closed'){
            $user = $this->db->query('SELECT * FROM data_user a WHERE a.user_id=' . $this->session->userdata('useradmin'))->row();
            if(isset($user)){
                if($user->role_id != 3){//superadmin or spv
                    $this->session->set_userdata('closed_status',1);
                    return false;
                }else{
                    return true;
                }
            }
        }else{
            return true;
        }
    }
    public function spk_final() {
        $this->mylib->checkloginadmin();
        $gc = new grocery_CRUD();
        $gc->set_subject('SPK Final');
        $gc->set_table('spk');
        $gc->where('spk.teknisi_id!=', 0);
        $gc->where('spk.spk_status!=', 'Order');
        $gc->set_relation('pelanggan_id', 'data_pelanggan', 'pelanggan_nama');
        $gc->set_relation('teknisi_id', 'data_teknisi', 'teknisi_nama');
        $gc->set_relation('ac_id', 'data_ac', 'ac_merk');
        $gc->change_field_type('spk_jenis', 'readonly');
        $gc->change_field_type('no_order', 'readonly');
        $gc->field_type('spk_jenis', 'hidden');
        $gc->field_type('is_bayar', 'hidden');
        $gc->display_as('ac_id', 'AC');
        $gc->display_as('is_bayar', 'Status Bayar');
        $gc->display_as('no_order', 'No SPK');
        $gc->display_as('', 'Jenis Layanan');
        $gc->display_as('teknisi_id', 'Teknisi');
        $gc->display_as('pelanggan_id', 'Nama Customer');
        $gc->display_as('spk_status', 'Status');
        $gc->display_as('created', 'Tgl');
        $gc->required_fields('pelanggan_id');
        $gc->add_action('Print', '', 'admin/print_teknisi_form', 'fa-print');
        $gc->add_action('Print Invoice', '', 'admin/invoice', 'fa-money');
        $gc->unset_add();
        $gc->unset_print();
        // $gc->unset_read();
        $gc->columns('created','no_order', 'teknisi_id', 'pelanggan_id','spk_jenis', 'spk_status', 'is_bayar');
        $output = $gc->render();
        $output->title = 'SPK Final | SI AC';
        $output->subtitle = 'SPK Final';
        $output->notes = '<p><i></i></p>';
        $this->paint_slice($output);
    }
    public function print($primary_key) {
        $this->load->library('pdfgenerator');
        $spk = $this->user->get_spk_by_id($primary_key);
        $jenis = $spk->spk_jenis;
   
        if($jenis == 'Cuci 1x' || $jenis == 'Cuci Langganan'){
            $data['_data'] = $spk; 
            $html = $this->load->view('pages/pdf_cuci', $data, true);
            $filename = 'report_' . time();
            $this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait', 1);
        }else{
            $data['_data'] = $spk; 
            $html = $this->load->view('pages/pdf_service', $data, true);
            $filename = 'report_' . time();
            $this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait', 1);
        }
    }
    public function invoice($primary_key) {
        $this->load->library('pdfgenerator');
        $spk = $this->user->get_spk_by_id($primary_key);
        $status = $spk->spk_status;
        if($status == 'Confirmed'){
            $data['_data'] = $spk; 
            $html = $this->load->view('pages/pdf_invoice', $data, true);
            $filename = 'report_' . time();
            $this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait', 1);

        }else{
            $this->session->set_userdata('invoice_status',1);
            redirect('admin/spk_final');
        }
        
    }
    public function invoice_teknisi($primary_key) {
        $this->load->library('pdfgenerator');
        $spk = $this->user->get_spk_by_id($primary_key);
        $status = $spk->spk_status;
        if($status == 'Confirmed'){
            $data['_data'] = $spk; 
            $html = $this->load->view('pages/pdf_invoice', $data, true);
            $filename = 'report_' . time();
            $this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait', 1);

        }else{
            $this->session->set_userdata('invoice_status',1);
            redirect('admin/spk_final_teknisi');
        }
        
    }
    public function pembayaran() {
        $this->mylib->checkloginadmin();
        $gc = new grocery_CRUD();
        $gc->set_subject('Pembayaran');
        $gc->set_table('pembayaran');
        $gc->set_relation('spk_id', 'spk', 'no_order');
        $gc->display_as('spk_id', 'No SPK');
        $gc->display_as('pembayaran_jenis', 'Jenis Bayar');
        $gc->display_as('pembayaran_bukti', 'Bukti Upload');
        $gc->display_as('pembayaran_jml', 'Jml Bayar');
        $gc->display_as('created', 'Tgl');
        $gc->set_field_upload('pembayaran_bukti', 'assets/uploads/bukti');
        $gc->callback_after_insert(array($this, 'callback_after_insert_bayar'));
        $gc->required_fields('spk_id','pembayaran_jenis','pembayaran_bukti','pembayaran_jml','created');
        // $gc->unset_add();
        $gc->unset_print();
        // $gc->unset_read();
        $gc->columns('pembayaran_bukti','created', 'spk_id', 'pembayaran_jenis','pembayaran_jml');
        $output = $gc->render();
        $output->title = 'Pembayaran | SI AC';
        $output->subtitle = 'Pembayaran';
        $output->notes = '<p><i></i></p>';
        $this->paint_slice($output);
    }
    function callback_after_insert_bayar($post_array,$primary_key)
    {
        $spk_id = $this->user->get_spk_by_bayar_id($primary_key);
        if(isset($spk_id)){
            $this->user->update_bayar_spk($spk_id->spk_id);
        }
       
        return true;
    }
    public function spk_final_teknisi() {
        $this->mylib->checkloginadmin();

        $user = $this->db->query('SELECT teknisi_id 
                                    FROM data_user a  
                                    JOIN data_teknisi c ON c.user_id = a.user_id 
                                    WHERE a.user_id=' . $this->session->userdata('useradmin'))->row();

        $gc = new grocery_CRUD();
        $gc->set_subject('SPK Final');
        $gc->set_table('spk');
        if(isset($user)){
            $gc->where('spk.teknisi_id', $user->teknisi_id);
        }
        $gc->where('spk.spk_status!=', 'Order');
        $gc->set_relation('pelanggan_id', 'data_pelanggan', 'pelanggan_nama');
        $gc->set_relation('teknisi_id', 'data_teknisi', 'teknisi_nama');
        $gc->set_relation('ac_id', 'data_ac', 'ac_merk');
        $gc->change_field_type('spk_jenis', 'readonly');
        $gc->change_field_type('no_order', 'readonly');
        $gc->field_type('spk_jenis', 'hidden');
        $gc->field_type('is_bayar', 'hidden');
        $gc->display_as('ac_id', 'AC');
        $gc->display_as('no_order', 'No SPK');
        $gc->display_as('spk_jenis', 'Jenis Layanan');
        $gc->display_as('teknisi_id', 'Teknisi');
        $gc->display_as('pelanggan_id', 'Nama');
        $gc->display_as('spk_status', 'Status');
        $gc->display_as('created', 'Tgl');
        $gc->required_fields('pelanggan_id');
        $gc->add_action('Print', '', 'admin/print_teknisi_form', 'fa-print');
        $gc->add_action('Print Invoice', '', 'admin/invoice_teknisi', 'fa-money');
        $gc->unset_add();
        $gc->unset_print();
        $gc->unset_read();
        $gc->unset_edit();
        $gc->unset_delete();
        $gc->columns('created','no_order', 'teknisi_id', 'pelanggan_id','spk_jenis', 'spk_status', 'is_bayar');
        $output = $gc->render();
        $output->title = 'SPK Final | SI AC';
        $output->subtitle = 'SPK Final';
        $output->notes = '<p><i></i></p>';
        $this->paint_slice($output);
    }
     public function print_teknisi_form($primary_key) {
        $spk = $this->user->get_spk_by_id($primary_key);
        $jenis = $spk->spk_jenis;
   
        if($jenis == 'Cuci 1x' || $jenis == 'Cuci Langganan'){
            $data['id'] = $primary_key;
            $data['notes'] = '';
            $data['js_files'] = '';
            $data['css_files'] = '';
            $this->st->layout('admin_layout');
            $this->st->slice('head_admin');
            $this->st->slice('head');
            $this->st->slice('menu_admin');
            $this->st->paint('print_teknisi_form_cuci', $data);
        }else{
            $data['id'] = $primary_key;
            $data['notes'] = '';
            $data['js_files'] = '';
            $data['css_files'] = '';
            $this->st->layout('admin_layout');
            $this->st->slice('head_admin');
            $this->st->slice('head');
            $this->st->slice('menu_admin');
            $this->st->paint('print_teknisi_form_service', $data);
        }
    }
     public function print_teknisi() {
        $data['_form'] = $_POST;
        $primary_key = $_POST['id'];
        $this->load->library('pdfgenerator');
        $spk = $this->user->get_spk_by_id($primary_key);
        $jenis = $spk->spk_jenis;
   
        if($jenis == 'Cuci 1x' || $jenis == 'Cuci Langganan'){
            $data['_data'] = $spk; 
            $html = $this->load->view('pages/pdf_cuci', $data, true);
            $filename = 'report_' . time();
            $this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait', 1);
        }else{
            $data['_data'] = $spk; 
            $html = $this->load->view('pages/pdf_service', $data, true);
            $filename = 'report_' . time();
            $this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait', 1);
        }
    }
    /*SPK */
    /*LAPORAN*/
     public function lap_jadwal() {
       $this->mylib->checkloginadmin();

        $user = $this->db->query('SELECT teknisi_id 
                                    FROM data_user a  
                                    JOIN data_teknisi c ON c.user_id = a.user_id 
                                    WHERE a.user_id=' . $this->session->userdata('useradmin'))->row();

        $gc = new grocery_CRUD();
        $gc->set_subject('SPK Final');
        $gc->set_table('spk');
        if(isset($user)){
            $gc->where('spk.teknisi_id', $user->teknisi_id);
        }
        $gc->where('spk.spk_status!=', 'Order');
        $gc->set_relation('pelanggan_id', 'data_pelanggan', 'pelanggan_nama');
        $gc->set_relation('teknisi_id', 'data_teknisi', 'teknisi_nama');
        $gc->set_relation('ac_id', 'data_ac', 'ac_merk');
        $gc->change_field_type('spk_jenis', 'readonly');
        $gc->change_field_type('no_order', 'readonly');
        $gc->field_type('spk_jenis', 'hidden');
        $gc->field_type('is_bayar', 'hidden');
        $gc->display_as('ac_id', 'AC');
        $gc->display_as('no_order', 'No SPK');
        $gc->display_as('spk_jenis', 'Jenis Layanan');
        $gc->display_as('teknisi_id', 'Teknisi');
        $gc->display_as('pelanggan_id', 'Nama');
        $gc->display_as('spk_status', 'Status');
        $gc->display_as('created', 'Tgl');
        $gc->required_fields('pelanggan_id');
        $gc->add_action('Print', '', 'admin/print', 'fa-print');
        $gc->add_action('Print Invoice', '', 'admin/invoice', 'fa-money');
        $gc->unset_add();
        $gc->unset_print();
        $gc->unset_read();
        $output = $gc->render();
        $output->title = 'SPK Final | SI AC';
        $output->subtitle = 'SPK Final';
        $output->notes = '<p><i></i></p>';
        $this->paint_slice($output);
    }
     public function lap_penjualan() {
        $data['title'] = 'Laporan Jadwal Teknisi | Admin';
        $data['subtitle'] = 'Laporan Jadwal Teknisi';
        $data['menu'] = 'Laporan Jadwal Teknisi';
        $data['notes'] = '';
        $data['js_files'] = '';
        $data['css_files'] = '';
        $this->st->layout('admin_layout');
        $this->st->slice('head_admin');
        $this->st->slice('head');
        $this->st->slice('menu_admin');
        $this->st->paint('lap_penjualan', $data);
    }
     public function lap_history() {
        $data['title'] = 'Laporan Jadwal Teknisi | Admin';
        $data['subtitle'] = 'Laporan Jadwal Teknisi';
        $data['menu'] = 'Laporan Jadwal Teknisi';
        $data['notes'] = '';
        $data['js_files'] = '';
        $data['css_files'] = '';
        $this->st->layout('admin_layout');
        $this->st->slice('head_admin');
        $this->st->slice('head');
        $this->st->slice('menu_admin');
        $this->st->paint('lap_jadwal', $data);
    }
     public function lap_performa() {
        $data['title'] = 'Laporan Jadwal Teknisi | Admin';
        $data['subtitle'] = 'Laporan Jadwal Teknisi';
        $data['menu'] = 'Laporan Jadwal Teknisi';
        $data['notes'] = '';
        $data['js_files'] = '';
        $data['css_files'] = '';
        $this->st->layout('admin_layout');
        $this->st->slice('head_admin');
        $this->st->slice('head');
        $this->st->slice('menu_admin');
        $this->st->paint('lap_performa', $data);
    }
    /*LAPORAN*/

    public function login() {
         if ($this->session->userdata('useradmin') == '') {
            $this->session->set_userdata("last_url", "login");
            $user = NULL;
            if (isset($_POST['username']) && isset($_POST['password'])) {
                $user = $this->db->query('SELECT * FROM data_user WHERE user_name LIKE "' . $_POST['username'] . '"')->row();
                if (count($user) > 0) {
                    $decoded = $user->user_password;
                    if ($decoded == md5($_POST['password'])) {
                        $this->mylib->set_session_admin($user);
                        redirect('admin/password');
                    } else {
                        $common['false'] = 1;
                    }
                } else {
                    $common['false'] = 1;
                }
            } else {
                $common['false'] = 0;
            }
            $common['title'] = 'Login to Web Admin';
            $st = new Stencil();
            $st->layout('login_admin_layout');
            $st->slice('head_login_admin');
            $st->slice('footer_admin');
            $common['js_files'] = ''; //$this->db->query('SELECT * FROM data_user WHERE is_delete is null')->result();
            $common['css_files'] = ''; //$this->db->query('SELECT * FROM data_user WHERE is_delete is null')->result();
//        $st->data($data);
            $st->paint('login_admin_view', $common);
        } else { 
            redirect('admin/password');
        }
    }

    public function password() {
        $this->mylib->checkloginadmin();
        $user = NULL;
        $common['title'] = 'Change Password | Web Admin';
        $common['subtitle'] = 'Change Password';
        $common['false_password'] = 0;
        $common['false'] = 0;
        $common['js_files'] = '';
        $common['css_files'] = '';
        if (isset($_POST['password']) && isset($_POST['re-password'])) {
            if ($_POST['new-password'] == $_POST['re-password']) {
                $user = $this->db->query('SELECT * FROM data_user WHERE user_id=' . $this->session->userdata('useradmin'))->row();
                $decoded = $user->user_password;
                if ($decoded == md5($_POST['password'])) {
                    $encrypted = md5($_POST['new-password']);
                    $this->db->query('UPDATE data_user SET user_password="' . $encrypted . '" WHERE user_id=' . $user->user_id);
                    $this->logout('1');
                } else {
                    $common['false'] = 1;
                }
            } else {
                $common['false_password'] = 1;
            }
        } else {
            $common['false'] = 0;
        }
        $st = new Stencil();
        $st->layout('admin_layout');
        $st->slice('head_admin');
        $st->slice('menu_admin');
        $st->slice('footer_admin');
        $st->paint('password_view', $common);
    }

    public function logout($val = '') {
        if ($val == 1) {
            $this->session->sess_destroy();
            echo '<script>'
            . 'alert("Password berhasil diubah! Silakan login kembali!");'
            . 'window.location.href = "' . site_url('admin') . '";'
            . '</script>';
        } else {
            $this->session->sess_destroy();
            redirect('admin');
        }
    }

}
