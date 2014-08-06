<?php
/**
 * login controller
 * 
 */
class Login extends CI_Controller {

    /**
     * index action
     */
    public function index() {
        $this->load->view('login/index');
    }

    /**
     *  validateUser action
     */
    
    public function validateUser() {

        $this->load->library('form_validation');
        $this->load->model('User');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $isValid = $this->User->validate($username, $password);

        if ($isValid) {
            //VALID login
            $user = $this->User->getUserByUsername($username);
            if (!$user) {
                die('ERROR. User not found');
            }
            $this->load->library('auth');
            $this->auth->login($user->id, $username);
            redirect('dashboard/index');
        } else {
            //INVALID login
            $this->session->set_flashdata('message', 'Username or/and password incorrect.');
            redirect('login');
        }
    }
}
