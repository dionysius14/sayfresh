<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mylib {

    var $CI;

    function set_session_lang($lang = '') {
        $CI = & get_instance();
        if ($CI->session->userdata('language') == '') {
            $CI->session->set_userdata('language', 'indonesia_lang');
            $CI->lang->load('indonesia_lang');
        } else {
            if ($lang == '') {
                if ($CI->session->userdata('language') == 'indonesia_lang') {
                    $CI->session->set_userdata('language', 'indonesia_lang');
                    $CI->lang->load('indonesia_lang');
                } else {
                    $CI->session->set_userdata('language', 'english_lang');
                    $CI->lang->load('english_lang');
                }
            } else {
                $CI->session->set_userdata('language', $lang);
                $CI->lang->load($lang);
            }
        }
    }

    function load_theme() {
        $CI = & get_instance();
        $tema = $CI->db->query('select * from setting_tema where tema_aktif=1 and is_delete=0 limit 1')->row();
        if (count($tema) == 0) {
            $tema = $CI->db->query('select * from setting_tema where is_default=1 and is_delete=0 limit 1')->row();
        }
        return "public/" . $tema->tema_folder . "/";
    }

    function set_session($user) {
        $CI = & get_instance();
        $sess_data = array(
            'login' => true,
            'userid' => $user->rsvp_id,
            'username' => $user->rsvp_user_name
        );
        $CI->session->set_userdata($sess_data);
    }

    function set_session_admin($user) {
        $CI = & get_instance();
        $sess_data = array(
            'login' => true,
            'useradmin' => $user->user_id,
            'username' => $user->user_name
        );
        $CI->session->set_userdata($sess_data);
    }

    function check_session() {
        $CI = & get_instance();
        if ($CI->session->userdata('login') == TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function checklogin() {
        $CI = & get_instance();
        if ($CI->session->userdata('userid') == '') {
            redirect('login/logout');
        }
    }

    function checkloginadmin() {
        $CI = & get_instance();
        if ($CI->session->userdata('useradmin') == '') {
            redirect('admin/login');
        }
    }

}
