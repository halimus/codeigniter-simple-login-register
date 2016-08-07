<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    /*
     * 
     */

    public function index() {
        $data['title'] = 'Index';
        
        /*
         * Load view
         */
        $this->load->view('index', $data);
    }

}
