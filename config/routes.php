<?php
\Flight::route('/', function() {
	echo 'Hello World!';
});

\Flight::map('notFound', function() {
	\Flight::render('404', array());
});