<?php

/**
 * Je vais chercher le controller si il existe
 */

if( isset($_GET['controller']) ) {
	$controller = $_GET['controller'];
}else {
	$controller = 'index';
}

$path = 'controllers/'.$controller.'.controller.php';



if( file_exists($path) ) {
	require_once($path);
}else{
	die('Cette page n\'existe pas'); 
}