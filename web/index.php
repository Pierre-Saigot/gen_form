<?php

require_once '../controller.php';
require_once '../model.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ( '/' === $uri) {
	home_action();
}elseif ('/index.php/damier' === $uri) {
	damier_action($_GET['nb']);
}elseif ('/index.php/triangle' === $uri) {
	triangle_action($_GET['nb']);
}
else {
	header('HTTP/1.1 404 Not Found');
	echo '<html><body><h1>Page Not Found</h1></body></html>';
}