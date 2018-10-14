<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    function get_user_info($id) {
        $this->db->select();
        $this->db->from('master_user');
        $this->db->where('user_id', $id['id']);
        $query = $this->db->get();
        return $query->result();
    }
}