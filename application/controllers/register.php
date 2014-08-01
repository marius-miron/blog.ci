<?php
/**
 * register controller
 */
class Register extends CI_Controller {

    /**
     * index action
     */
    public function index() {
        $this->load->view('register/index');
    }

    /**
     * indexPost action
     */
    public function indexPost() {
        if (!$this->input->post()) {
            redirect('/register');
        }

        $this->load->library('form_validation');

        //--- field name, error message, validation rules
        $this->form_validation->set_rules('username', 'Username', 'trim|is_unique[users.username]|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'trim|required|matches[password]');

        if ($this->form_validation->run() == false) {
            $this->load->view('register/index');
        } else {
            $this->load->model('User');
            $this->User->setUsername($this->input->post('username'));
            $this->User->setPassword($this->input->post('password'));
            $this->User->insertIntoDb();
            redirect('/login');
        }
    }

}
