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
    private $id;
    /**
     * Visibility of Post
     * @var int
     */
    private $visibility;
    /**
     * Count of likes
     * @var int
     */
    private $likes;
    /**
     * Userid from the Postowner
     * @var String
     */
    private $owner;
    /**
     * Groupid
     * @var String
     */
    private $groupid;
    /**
    * Type of Post (10 for text, 20 for image)
    * @var Int
    */
    private $type;
    /**
    * Creation Date
    * @var Date
    */
    private $creationdate;

    function initialize($arr) 
    {
        $this->id           = $arr['postid'];
        $this->visibility   = $arr['visibility'];
        $this->likes        = $arr['likes'];
        $this->owner        = $arr['owner'];
        $this->groupid      = $arr['groupid'];
        $this->type         = $arr['type'];
        $this->creationdate = $arr['creationdate'];
        return $this;
    }

    public function __set($name, $value) 
    {
        $this->$name = $value;
    }

    public function __get($name) 
    {
        return $this->$name;
    }
}
