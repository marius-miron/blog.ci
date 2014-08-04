<?php

/**
 * User 
 */
class User extends CI_Model {

    protected $username;
    protected $password;

    /**
     * get username
     * 
     * @return string
     */
    public function getUsername() {

        return $this->username;
    }
    
    /**
     * set username
     * 
     * @param  $username = string
     */
    public function setUsername($username) {

        $this->username = $username;
    }

    /**
     * get password
     * 
     * @return type = string
     */
    public function getPassword() {

        return $this->password;
    }
    
    /**
     * set password
     * 
     * @param type $password = string
     */
    public function setPassword($password) {

        $this->password = $password;
    }
    
    /**
     * insert Into Db action
     */
    public function insertIntoDb() {
        
        $username = $this->getUsername();
        $password = $this->getPassword();
        
        $this->db->query("INSERT INTO users(username, password) VALUES('$username','$password')");
        
    }
    
    /**
     * validate user
     * 
     * @return boolean
     */

    public function validate(){
        
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', $this->input->post('password')); 
        $query = $this->db->get('users');
        
        if($query->num_rows == 1 ){
            return true;
        }
                
    }
    
 }

