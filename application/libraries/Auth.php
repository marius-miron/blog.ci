<?php

class Auth {

    const USER_ID_SESSION_KEY = 'user_id';
    const USERNAME_SESSION_KEY = 'username';
    const IS_LOGGED_IN_SESSION_KEY = 'is_logged_in';

    protected $CI;
    /**
     * constructor
     */
    public function __construct() {
        $this->CI = & get_instance();
        $this->CI->load->library('session');
    }
    /**
     * login action
     */
    public function login($userId, $username) {
        $this->CI->session->set_userdata(array(
            self::USER_ID_SESSION_KEY => $userId,
            self::USERNAME_SESSION_KEY => $username,
            self::IS_LOGGED_IN_SESSION_KEY => true
                )
        );
    }
    /**
     * logout action
     */
    public function logout() {
        $this->CI->session->unset_userdata(self::USER_ID_SESSION_KEY);
        $this->CI->session->unset_userdata(self::USERNAME_SESSION_KEY);
        $this->CI->session->unset_userdata(self::IS_LOGGED_IN_SESSION_KEY);
    }

    /**
     * Check if user is logged in
     * 
     * @return boolean
     */
    public function isLoggedIn() {
        return $this->CI->session->userdata(self::IS_LOGGED_IN_SESSION_KEY);
    }
    
    /**
     * Get logged in user id
     * 
     * @return integer
     */
    public function getUserId() {
        return (int) $this->CI->session->userdata(self::USER_ID_SESSION_KEY);
    }

}
