<?php

/**
 * A test controller
 *
 * @category Controllers
 * @package
 */
class welcomeController
{

    /**
     * Renders an example view
     */
    public static function welcome() {

        \Flight::render('welcomeView', array('name' => 'TBZSN'), 'body_content');
        \Flight::render('layout');
    }

}
