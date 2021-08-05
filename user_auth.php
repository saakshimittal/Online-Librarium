<?php
session_start();
if(isset($_POST['type']) && $_POST['type']=='ajax'){
	if((time()-$_SESSION['activetime'])>60){
		echo "logout";
	}
}else{
	if(isset($_SESSION['activetime'])){
		if((time()-$_SESSION['activetime'])>60){
			header('location:logout.php');	
			die();
		}
	}
	
}
?>