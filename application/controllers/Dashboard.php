<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    var $session_data;

    function __construct() {
        parent::__construct();

    }

    /*
     * 
     */

    public function index() {
        $data['title'] = 'Dashboard';
       
        
        
        
        /*
         * Load view
         */
        $this->load->view('includes/header', $data);
        $this->load->view('dashboard/index');
        $this->load->view('includes/footer');
    }

}
