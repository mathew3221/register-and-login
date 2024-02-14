<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Loginmodel extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function login($email, $password){
        $query = $this->db->get_where('users', array('email' => $email));
        $user = $query->row();

        if ($user) {
            if (password_verify($password, $user->password)) {
                // Password is correct
                return true;
            }
        }

        // Either user does not exist or password is incorrect
        return false;
    }
}
?>
