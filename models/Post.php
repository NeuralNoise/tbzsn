<?php
/**
 * Postclass
 * @author happyoniens
 */
class Post
{

    /**
   * Id of Post
   * @var String
   */
    private $_id;

    /**
     * Visibility of Post
     * @var int
     */
    private $_visibility;

    /**
     * Count of likes
     * @var int
     */
    private $_likes;

    /**
     * Userid from the Postowner
     * @var String
     */
    private $_owner;

    /**
     * Groupid
     * @var String
     */
    private $_groupId;

    /**
    * Type of Post (10 for text, 20 for image)
    * @var Int
    */
    private $_type;

    /**
    * Creation Date
    * @var Date
    */
    private $_creationDate;

    private function _initialize($arr) {

        $this->_id           = $arr['postid'];
        $this->_visibility   = $arr['visibility'];
        $this->_likes        = $arr['likes'];
        $this->_owner        = $arr['owner'];
        $this->_groupId      = $arr['groupid'];
        $this->_type         = $arr['type'];
        $this->_creationDate = $arr['creationdate'];
        return $this;
    }

    public function __set($name, $value) {

        $this->$name = $value;
    }

    public function __get($name) {

        return $this->$name;
    }

}
