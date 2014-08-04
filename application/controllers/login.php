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
        $query = $this->User->validate();

        if ($query) {
            //VALID login
            $data = array(
                'username' => $this->input->post('username'),
                'is_logged_in' => true
            );

            $this->session->set_userdata($data);
            redirect('dashboard/index');
        } else {
            //INVALID login
            $this->session->set_flashdata('message', 'Username or/and password incorrect.');
            redirect('login');
        }
    }
}
