<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    function get_by_id($id) {
        $this->db->select();
        $this->db->from('data_user');
        $this->db->where('user_id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    function update($password, $id) {
        $data = array(
            'user_password' => $password
        );
        $this->db->where('user_id', $id);
        $this->db->update('data_user', $data);
    }
    function get_spk_by_id($id) {
        $this->db->select();
        $this->db->from('spk');
        $this->db->join('data_pelanggan','data_pelanggan.pelanggan_id=spk.pelanggan_id');
        $this->db->join('data_ac','data_ac.ac_id=spk.ac_id');
        $this->db->join('data_teknisi','data_teknisi.teknisi_id=spk.teknisi_id');
        $this->db->where('spk_id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    function get_last_spk_id() {
        $this->db->select();
        $this->db->from('spk');
        $this->db->where('created', date('Y-m-d'));
        $this->db->order_by('spk_id', 'DESC');
        $query = $this->db->get();
        return $query->row();
    }
    function get_spk_by_bayar_id($id) {
        $this->db->select();
        $this->db->from('pembayaran');
        $this->db->where('pembayaran_id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    function update_bayar_spk($id) {
        $data = array(
            'is_bayar' => 'Sudah Bayar'
        );
        $this->db->where('spk_id', $id);
        $this->db->update('spk', $data);
    }
}