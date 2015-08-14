<?php
/**
 *  Userclass
 *  @author happyoniens
 */
class User {
    /**
     * Userid
     * @var String
     * @example b4148d18
     */
    private $userid;
    /**
     * Username
     * @var String
     */
    private $username;
    /**
     * Password encrypted with SHA 256
     * @var String
     */
    private $password;
    /**
     * Email
     * @var String
     */
    private $email;

    function initialize($arr){
        $this->userid   = $arr['userid'];
        $this->username = $arr['username'];
        $this->password = $arr['password'];
        $this->email    = $arr['email'];

        return $this;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }
}
