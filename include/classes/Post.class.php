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

    function __construct($arr){
        $this->visibility = $arr['visibility'];
        $this->likes = $arr['likes'];
        $this->owner = $arr['owner'];
        $this->groupid = $arr['groupid'];

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

}
 ?>
