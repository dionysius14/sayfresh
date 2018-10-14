<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function get_user_info($username, $password) {
        $this->db->select();
        $this->db->from('data_rsvp');
        $this->db->like('rsvp_user_name', $username);
        $this->db->like('rsvp_user_password', $password);
        $query = $this->db->get();
        return $query->row();
    }

    function get_user_byid($id) {
        $this->db->select();
        $this->db->from('data_rsvp');
        $this->db->where('rsvp_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

}
