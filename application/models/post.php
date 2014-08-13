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
    public function getAllPostsByUserId($userId) {

        $query = $this->db->get_where('posts', array('user_id' => $userId));
        $subjects = array();
        foreach ($query->result() as $row) {
            $subjects[$row->id] = $row->subject;
        }

        return $subjects;
    }

    /**
     * delete post from batabase
     * 
     * @param integer $postId
     * @param integer $userId
     */
    public function deletePostFromDb($postId,$userId) {
        $this->db->where('id', $postId);
        $this->db->where('user_id', $userId);
        $this->db->delete('posts');
    }
    
    /**
     * Get Post model by id
     * 
     * @param integer $postId
     * @return stdClass|null properties:id,subject,message,user_id
     */
    public function getPostById($postId) {
        $query = $this->db->get_where('posts', array('id' => $postId));
        foreach ($query->result() as $row) {
            return $row;
        }
        
        return null;
    }
    
    /**
     * 
     * @param integer $id The id of the Post model
     * @param array $data Array contaning new data 
     */
    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('posts', $data);
    }

}
