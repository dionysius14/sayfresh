<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Rsvp_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function insert($data) {
        $this->db->insert('data_rsvp', $data);
    }
}
