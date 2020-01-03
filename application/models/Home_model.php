<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

	function get_profile() {
        $this->db->select();
        $this->db->from('data_profile');
        $query = $this->db->get();
        return $query->row();
    }
}
