<?php
class Posts {
    public function getPostsFromUser($userid){
        //SQL
        //...
        $res = $mysqli->query($sql);

        $posts = Array();
        while($row = $res->fetch_assoc()){
            if($row['type'] == 10){
              $posts[] = new Textpost($row);
            }else if($row['type'] == 20)
            $posts[] = new Imagepost($row);
            }

        return $posts;
    }

    public function getPostsFromGroup($groupid){
        //SQL
        //...
        $res = $mysqli->query($sql);

        $posts = Array();
        while($row = $res->fetch_assoc()){
            if($row['type'] == 10){
              $posts[] = new Textpost($row);
            }else if($row['type'] == 20)
            $posts[] = new Imagepost($row);
            }
        }

        return $posts;

    }
}
?>
