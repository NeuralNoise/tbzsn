<?php
\Flight::route('/', function() {
	\Flight::render('welcomeView',array('name'=>'TBZSN'),'body_content');
	\Flight::render('layout');
});

\Flight::map('notFound', function() {
	\Flight::render('404', array());
});
