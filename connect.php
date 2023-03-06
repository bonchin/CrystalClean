<?php


    $dbUser = 'root';
	$dbName = 'clean';
	$dbPass = '';
	$connect = new mysqli('localhost', $dbUser, $dbPass, $dbName);
	$query = "set names utf8";
	$connect->query($query);

	
?>
