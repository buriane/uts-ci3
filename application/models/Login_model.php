<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    public function getUser($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $query = $this->db->get('users');

        if ($query->num_rows() == 1) {
            return $query->row_array();
        } else {
            return false;
        }
    }
}