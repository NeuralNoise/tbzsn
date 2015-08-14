<?php
class welcomeController{
    public static function welcome(){
        \Flight::render('welcomeView',array('name'=>'TBZSN'),'body_content');
        \Flight::render('layout');
    }
}
