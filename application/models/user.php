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
     * get Id
     * @return type integer
     */
    public function getId() {
        return $this->id;
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
        $this->db->insert('users', $this);
    }

    /**
     * validate user by username and password
     * 
     * @param string $username
     * @param string $password
     * @return boolean
     */
    public function validate($username, $password) {

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('users');

        if($query->num_rows == 1 ){
            return true;
        }

        return false;
    }
        /*
         * get user by username action
         * @param string $username
         */
    public function getUserByUsername($username) {
        $query = $this->db->get_where('users', array('username' => $username), 1);
        foreach ($query->result() as $row) {
            return $row;
        }
        
        return null;
    }

}
