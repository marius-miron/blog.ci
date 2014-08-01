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

    public function insertIntoDb() {
        
        $username = $this->getUsername();
        $password = $this->getPassword();
        
        $this->db->query("INSERT INTO users(username, password) VALUES('$username','$password')");
        
    }
}

