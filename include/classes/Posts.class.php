<?php
class Posts {
    public function getPostsFromUser($userid){
        //SQL
        //...
        $res = $mysqli->query($sql);

        $posts = Array();
        while($row = $res->fetch_assoc()){
            if($row['type'] == 10){
              $tp = new Textpost();
              $posts[] = $tp->initialize($row);
            }else if($row['type'] == 20)
              $ip = new Imagepost();
              $posts[] = $ip->initialize($row);
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
              $tp = new Textpost();
              $posts[] = $tp->initialize($row);
            }else if($row['type'] == 20)
              $ip = new Imagepost();
              $posts[] = $ip->initialize($row);
            }
        }

        return $posts;

    }
}
?>
