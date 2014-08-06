<?php

/**
 * Logout controller
 */
class Logout extends CI_Controller {

    /**
     * index action
     */
    public function index() {
        $this->load->library('auth');
        $this->auth->logout();
        $this->session->set_flashdata('flashSuccess', 'You have succesfully logged out!');
        redirect(base_url());
    }

}
