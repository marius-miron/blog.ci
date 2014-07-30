<?php
/**
 * register controller
 */
class Register extends CI_Controller
{
    /**
    * index action
    */
    public function index() {
        $this->load->view('register/registration');
    }
    
}