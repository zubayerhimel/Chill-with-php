<?php

	include_once ('crud.php');
	
	$crud = new crud();
	
	$id = $_GET['id'];
	
	if($crud->delete($id,"account_info")){
		header("location:ViewAccountInfo.php");
	}


?>