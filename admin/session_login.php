<?php
$user_role = '';
if (session_status() == PHP_SESSION_NONE) {
	session_start(); //start session if session not start
}

if (!isset($_SESSION['logged'])) {
	$user_role = $_SESSION['role'];
	header('location: index.php');
}
