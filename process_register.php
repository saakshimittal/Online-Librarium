<?php
	require('includes/config.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		
		if(empty($_POST['fnm']) || empty($_POST['unm']) || empty($_POST['gender']) || empty($_POST['pwd']) || empty($_POST['cpwd']) || empty($_POST['mail']))
		{
			$msg.="<li>Please enter all details";
		}
		
		if($_POST['pwd']!=$_POST['cpwd'])
		{
			$msg.="<li>Passwords dont match";
		}
		
		
		$email=$_POST['mail'];
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$msg.="<li>Invalid Email";
			}

		$contact=$_POST['contact'];
		if(!(($contact/1000000000)>1 && ($contact/1000000000)<10))
		{
			$msg.="<li>Invalid Mobile no.";
		}


		if(strlen($_POST['pwd'])<6)
		{
			$msg.="<li>Password is too short";
		}

		if(strlen($_POST['pwd'])>20)
		{
			$msg.="<li>Password is too long";
		}

		$containsLetter  = preg_match('/[a-zA-Z]/',    $_POST['pwd']);
		$containsDigit   = preg_match('/\d/',          $_POST['pwd']);
		$containsSpecial = preg_match('/[^a-zA-Z\d]/', $_POST['pwd']);

		if($containsLetter == 0)
		{
			$msg.="<li>Password should contain atleast one letter!";
		}

		if($containsDigit == 0)
		{
			$msg.="<li>Password should contain atleast one digit!";
		}

		if($containsSpecial == 0)
		{
			$msg.="<li>Password should contain atleast one special character!";
		}

		
		if(is_numeric($_POST['fnm']))
		{
			$msg.="<li>Invalid Name";
		}
		
		if($msg!="")
		{
			header("location:register.php?error=".$msg);
		}
		else
		{

			$fnm=$_POST['fnm'];
			$unm=$_POST['unm'];
			$pwd=$_POST['pwd'];
			$gender=$_POST['gender'];
		
		
			$query="insert into user(u_fnm,u_unm,u_pwd,u_gender,u_email,u_contact)
			values('$fnm','$unm','$pwd','$gender','$email','$contact')";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
			header("location:register.php?ok=1");
			

			
			
			
		}
	}
	else
	{
		header("location:index.php");
	}
?>