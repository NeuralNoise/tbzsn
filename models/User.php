<?php
/**
 *  Userclass
 *  @author happyoniens
 */
class User
{

    /**
     * Userid
     * @var String
     * @example b4148d18
     */
    private $_userId;

    /**
     * Username
     * @var String
     */
    private $_username;

    /**
     * Password encrypted with SHA 256
     * @var String
     */
    private $_password;

    /**
     * Email
     * @var String
     */
    private $_email;

    private function _initialize($arr) {

        $this->_userId   = $arr['userid'];
        $this->_username = $arr['username'];
        $this->_password = $arr['password'];
        $this->_email    = $arr['email'];

        return $this;
    }

    public function __set($name, $value) {

        $this->$name = $value;
    }

    public function __get($name) {

        return $this->$name;
    }

}
