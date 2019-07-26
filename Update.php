<?php
	
	include_once ('Crud.php');
	
	$crud = new Crud();
	
	if(isset($_POST['update'])){
		$id = $_POST['id'];
		$anumber = $_POST['anumber'];
		$aname = $_POST['aname'];
        $atype = $_POST['atype'];
        $bname = $_POST['bname'];
		
		$result = $crud->execute("Update account_info SET account_number='$anumber', account_name='$aname', account_type='$atype', b_name='$bname' where id=$id");
		
		if($result){
			header("Location:ViewAccountInfo.php");
		}else{
			echo "Update Problem!";
		}
		
	}
	
	
?>