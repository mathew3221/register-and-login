<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signupmodel extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    function signup($data){
        return $this->db->insert('users',$data);
    }

    function check_email_exists($email){
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        if($query->num_rows() > 0){
            return true; // Email exists
        } else {
            return false; // Email does not exist
        }
    }
}
?>
