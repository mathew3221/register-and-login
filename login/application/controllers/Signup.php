<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->model('signupmodel');

	}

	function index(){
		$data=array();
		$this->load->view('signup',$data);
	
	}


	function signup(){
    $this->form_validation->set_rules('firstname', 'First Name', 'required');
    $this->form_validation->set_rules('lastname', 'Last Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required|matches[password]');

    if ($this->form_validation->run() == FALSE) {
        // Form validation failed
        $this->load->view('signup');
    } else {
        // Form validation passed, check if email already exists
        $email = $this->input->post('email');
        $email_exists = $this->signupmodel->check_email_exists($email);

        if ($email_exists) {
            // Email already exists, return response
            echo 'email_exists';
        } else {
            // Email is unique, insert data into the database
            $data = array(
                // Data array...
            );
            $this->signupmodel->signup($data);
            // Return success response
            echo 'success';
        }
    }
}



}