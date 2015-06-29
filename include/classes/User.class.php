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
        $this->userid = $arr['userid'];
        $this->username = $arr['username'];
        $this->password = $arr['password'];
        $this->email = $arr['email'];

        return $this;
    }

    /**
     * Get the value of Userid
     *
     * @return String
     */
    public function getId(){
        return $this->id;
    }

    /**
     * Set the value of Userid
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * Get the value of Username
     *
     * @return String
     */
    public function getUsername(){
        return $this->username;
    }

    /**
     * Set the value of Username
     */
    public function setUsername($username) {
        $this->username = $username;
    }

    /**
     * Get the value of Password
     *
     * @return String
     */
    public function getPassword(){
        return $this->password;
    }

    /**
     * Set the value of Password
     */
    public function setPassword($password) {
        $this->password = $password;
    }

    /**
     * Get the value of Email
     *
     * @return String
     */
    public function getEmail(){
        return $this->email;
    }

    /**
     * Set the value of Email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

}
?>
