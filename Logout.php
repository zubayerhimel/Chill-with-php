<?php
session_start();

$_SESSION = array();

session_destroy();
if(!isset($_SESSION['email'])){
	header('location:Login.php');
}
?>