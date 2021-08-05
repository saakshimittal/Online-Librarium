<?php session_start();

		$_SESSION=array();		//session_destroy();
		if(isset($_GET["session_expired"])) {
	$url .= "?session_expired=" . $_GET["session_expired"];
}
if(isset($_GET['sesh']))
											{
												header("location:index.php?dis=1");
											}
						
		
	else{header("location:index.php?");}
					
?>

	
	
	
