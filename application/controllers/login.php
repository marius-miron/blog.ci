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

}
