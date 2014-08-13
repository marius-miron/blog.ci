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

    /**
     * deletePost action
     * delete a post of logged in user
     */
    public function deletePost() {

        // luate din sesiune user id si subject
        $this->load->library('auth');
        $this->load->model('Post');
        $this->Post->deletePostFromDb($this->uri->segment(3), $this->auth->getUserId());
        redirect('dashboard/allPosts');
    }
    /**
     * edit action
     * edit a post of logged in user
     */
    public function edit() {
        //we load the Post model  
        $this->load->model('Post');
        //we find a Post with an ID that is the 3rd segment in the URL
        $post = $this->Post->getPostById($this->uri->segment(3));
        //we get the Subject from the Post we found priviously
        $this->load->view('dashboard/edit', $post);
    }
    /**
     * editPost action
     * update the post edited of logged in user
     */
    public function editPost() {
        $data = $this->input->post();
        $this->load->model('Post');
        $this->Post->update($data['id'], $data);
        
        // Display success message
        $this->session->set_flashdata('postUpdatedFlashSuccess', 'Your post has been successfuly updated !');
        redirect('dashboard/allPosts');
    }

}
