<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

    var $session_user;

    function __construct() {
        parent::__construct();

        Utils::no_cache();
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url('auth/login'));
            exit;
        }
        $this->session_user = $this->session->userdata('logged_in');
    }

    /*
     * 
     */

    public function index() {
        redirect(base_url('account/change_password'));
    }
    
    public function change_password() {
        $data['title'] = 'Change password';

        $data['session_user'] = $this->session_user;
        /*
         * Load view
         */
        $this->load->view('includes/header', $data);
        $this->load->view('includes/navbar');
        $this->load->view('profile/change_password');
        $this->load->view('includes/footer');
    }


    /*
     * 
     */
    public function logout() {
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        Utils::no_cache();
        redirect(base_url('auth/login'));
    }

}
