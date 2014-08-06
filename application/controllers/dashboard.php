<?php

/**
 *  Dashboard controller
 */
class Dashboard extends CI_Controller {

    /**
     * constructor
     * load library auth
     * redirect to base url if there is no logged in user
     */
    public function __construct() {
        parent::__construct();
        $this->load->library('auth');
        if (!$this->auth->isLoggedIn()) {
            redirect(base_url());
        }
    }
    /**
     * index action
     */
    public function index() {
        
        $this->load->view('dashboard/index');
    }

    /**
     * newPost action
     */
    public function newPost() {
        
        $this->load->view('dashboard/newPost');
    
       }

    /**
     * indexPost action
     */
    public function indexPost() {

        $user_id = $this->session->userdata('user_id');

        $this->load->library('form_validation');

        //--- field name, error message, validation rules
        $this->form_validation->set_rules('subject', 'Subject here', 'trim|required|xss_clean');
        $this->form_validation->set_rules('message', 'Your comment goes here', 'trim|required');

        if ($this->form_validation->run() == false) {

            // Display error message
            $this->session->set_flashdata('flashError', 'This is an error message.');
            redirect('dashboard/newPost');
        } else {
            $this->load->model('Post');
            $this->Post->setSubject($this->input->post('subject'));
            $this->Post->setMessage($this->input->post('message'));
            $this->Post->setUserId($user_id);
            $this->Post->insertIntoDb();

            // Display success message
            $this->session->set_flashdata('flashSuccess', 'Your new post has been successfully saved !');
            redirect('dashboard/index');
        }
    }
    /**
     * allPosts action
     * get all posts from an user
     */
     public function allPosts() {
        
        $this->load->model('Post');
        $this->load->library('auth');
        $subjects = $this->Post->getAllPostsByUserId($this->auth->getUserId());
        $data = array();
        $data['subjects'] = $subjects;
        $this->load->view('dashboard/allPosts', $data);
    }

}
