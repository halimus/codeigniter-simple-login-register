<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    /*
     * 
     */

    public function Authentif() {
        $notif = array();

        $email = $this->input->post('email');
        $password = Utils::hash('sha1', $this->input->post('password'), AUTH_SALT);

        $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
        $query = $this->db->query($sql, array($email, $password));

        if ($query->num_rows) {
            $row = $query->row();
            if ($row->active != 1) {
                $notif['message'] = 'Your account is disabled !';
                $notif['type'] = 'warning';
            } 
            else {
                
                $sess_data = array(
                    'users_id' => $row->users_id,
                    'first_name' => $row->first_name,
                    'last_name' => $row->last_name,
                    'email' => $row->email
                );
                $this->session->set_userdata('logged_in', $sess_data);
                $this->update_last_login($row->users_id);
                
            }
        } else {
            $notif['message'] = 'Username or password incorrect !';
            $notif['type'] = 'error';
        }
        return $notif;
    }

    /*
     * 
     */

    private function update_last_login($users_id) {
        $sql = "UPDATE users SET last_login = NOW() WHERE users_id=" . $this->db->escape($users_id);
        $this->db->query($sql);
    }

}
