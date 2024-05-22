<?php

$host = 'localhost';
$user = 'root';
$pwd  = '';
$db   = 'webapp2_laboratories';

try {
	$conn = mysqli_connect($host, $user, $pwd, $db);
	echo "Connected Successfully";
} catch (Exception $e) {
	echo mysqli_connect_error();
}

?>