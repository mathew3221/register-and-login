<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->model('loginmodel');
    }

    public function index(){
        $this->load->view('login');
    }


    public function authenticate(){
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, reload login page with errors
            $this->load->view('login');
        } else {
            // Validation passed, check credentials
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            if ($this->loginmodel->login($email, $password)) {
                // Authentication successful, set user session and redirect to dashboard or any other page
                $user_data = array(
                    'email' => $email,
                    // Add any other relevant user data to the session
                );
                $this->session->set_userdata($user_data);
                $this->load->view('dashboard'); // Change 'dashboard' to your desired destination
            } else {
                // Authentication failed, show error message
                $data['error'] = 'Invalid email or password';
                $this->load->view('login', $data);
            }
        }
    }

    public function logout(){
        // Clear session data and redirect to login page
        $this->session->sess_destroy();
        redirect('login');
    }
}
?>
