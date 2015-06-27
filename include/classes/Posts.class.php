<?php
class Posts {
    public function getPostsFromUser($userid){
        //SQL
        //...
        $res = $mysqli->query($sql);

        $posts = Array();
        while($row = $res->fetch_assoc()){
            $posts[] = new Post($row);
        }

        return $posts;
    }

    public function getPostsFromGroup($groupid){
        //SQL
        //...
        $res = $mysqli->query($sql);

        $posts = Array();
        while($row = $res->fetch_assoc()){
            $posts[] = new Post($row);
        }

        return $posts;
    
    }
}
?>
