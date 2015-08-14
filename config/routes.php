<?php
Flight::route('/', array('welcomeController','welcome'));

\Flight::map('notFound', function() {
	\Flight::render('404', array());
});
