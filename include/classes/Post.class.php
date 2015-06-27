<?php
/**
 * Postclass
 * @author happyoniens
 */
class Post {
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

    function __construct($arr){
        $this->visibility = $arr['visibility'];
        $this->likes = $arr['likes'];
        $this->owner = $arr['owner'];
        $this->groupid = $arr['groupid'];
        $this->type = $arr['type'];
        $this->creationdate = $arr['creationdate'];
        return $this;
    }

    /**
     * Get the value of Visibility of Post
     *
     * @return int
     */
    public function getVisibility(){
        return $this->visibility;
    }

    /**
     * Set the value of Visibility of Post
     */
    public function setVisibility($visibility) {
        $this->visibility = $visibility;
    }

    /**
     * Get the value of Count of likes
     *
     * @return int
     */
    public function getLikes(){
        return $this->likes;
    }

    /**
     * Set the value of Count of likes
     */
    public function setLikes($likes) {
        $this->likes = $likes;
    }

    /**
     * Get the value of Userid from the Postowner
     *
     * @return String
     */
    public function getOwner(){
        return $this->owner;
    }

    /**
     * Set the value of Userid from the Postowner
     */
    public function setOwner($owner) {
        $this->owner = $owner;
    }

    /**
     * Get the value of Groupid
     *
     * @return String
     */
    public function getGroupid(){
        return $this->groupid;
    }

    /**
     * Set the value of Groupid
     */
    public function setGroupid($groupid) {
        $this->groupid = $groupid;
    }
    /**
     * Set the value of Userid from the Postowner
     */
    public function setOwner($owner) {
        $this->owner = $owner;
    }

    /**
     * Get the value of Type
     *
     * @return Int
     */
    public function getType(){
        return $this->type;
    }

    /**
     * Set the value of Type
     */
    public function setType($type) {
        $this->type = $type;
    }

    /**
     * Get the value of Creationdate
     *
     * @return Date
     */
    public function getCreationdate(){
        return $this->creationdate;
    }

    /**
     * Set the value of Creationdate
     */
    public function getCreationdate($creationdate) {
        $this->creationdate = $creationdate;
    }


}
 ?>
