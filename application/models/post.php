<?php

/**
 * Post class
 */
class Post extends CI_Model {

    protected $subject;
    protected $message;
    protected $user_id;

    /**
     * get subject
     * 
     * @return string
     */
    public function getSubject() {

        return $this->subject;
    }

    /**
     * set subject
     * 
     * @param  $subject = string
     */
    public function setSubject($subject) {

        $this->subject = $subject;
    }

    /**
     * get message
     * 
     * @return type = string
     */
    public function getMessage() {

        return $this->message;
    }

    /**
     * set message
     * 
     * @param type $message = string
     */
    public function setMessage($message) {

        $this->message = $message;
    }

    public function getUserId() {
        return $this->user_id;
    }

    public function setUserId($id) {
        $this->user_id = $id;

        return $this;
    }

    /**
     * insert Into Db action
     */
    public function insertIntoDb() {
        
        $this->db->set('subject', $this->getSubject());
        $this->db->set('message', $this->getMessage());
        $this->db->set('user_id', $this->getUserId());
        $this->db->insert('posts');
    }
    
    /**
     * Get all subjects by user id
     * 
     * @param integer $userId
     * @return array
     */
    public function getAllPostsByUserId($userId){
        
        $query = $this->db->get_where('posts', array('user_id' => $userId));
        $subjects = array();
        foreach ($query->result() as $row) {
            $subjects[] = $row->subject;
        }
        
        return $subjects;
        
    }

}
