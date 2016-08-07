<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    /**
     *           
     */
    public function index() {
        redirect(base_url('auth/login'));
    }

    /**
     *           
     */
    public function login() {
        $data['title'] = 'Login';

        if (count($_POST)) {
            $this->form_validation->set_rules('email', 'Email address', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

            if ($this->form_validation->run() == false) {
                $data['message'] = Utils::errors_treatment(validation_errors());
            } else {
                $this->load->model('auth_model');
                $data['message'] = $this->auth_model->Authentif();
            }
        }
        
        if ($this->session->userdata('logged_in')) {
            redirect(base_url('dashboard'));
            exit;
        }

        /*
         * Load view
         */
        $this->load->view('auth/includes/header', $data);
        $this->load->view('auth/login');
        $this->load->view('auth/includes/footer');
    }

    /**
     *           
     */
    public function register() {
        $data['title'] = 'Register';



        /*
         * Load view
         */
        $this->load->view('auth/includes/header', $data);
        $this->load->view('auth/register');
        $this->load->view('auth/includes/footer');
    }

    /**
     *           
     */
    public function forgot_password() {
        $data['title'] = 'Forgot password';



        /*
         * Load view
         */
        $this->load->view('auth/includes/header', $data);
        $this->load->view('auth/forgot_password');
        $this->load->view('auth/includes/footer');
    }

}
