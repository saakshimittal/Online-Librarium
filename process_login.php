<?php session_start();
require('includes/config.php');	

	if(!empty($_POST))
	{
		$msg=[];
		
		if(empty($_POST['usernm']))
		{
			$msg[]="Enter Username.";
		}
		
		if(empty($_POST['pwd']))
		{
			$msg[]="Enter Password.";
		}
		
		if(empty($_POST['captcha_code']))
		{
			$msg[]="Please Enter Captcha.";
		}
		$code = $_POST['captcha_code'];

 if($code != $_SESSION['captcha_text'] && $code!=NULL)
{
 $msg[]="Invalid Captcha";
		}
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
		
			
			$unm=$_POST['usernm'];
			
			$q="select * from user where u_unm='$unm'";
			
			$res=mysqli_query($conn,$q) or die("wrong query");
			
			$row=mysqli_fetch_assoc($res);
			
			if(!empty($row))
			{
				if($_POST['pwd']==$row['u_pwd'])
				{
					$_SESSION=array();
					$_SESSION['unm']=$row['u_unm'];
					$_SESSION['uid']=$row['u_pwd'];
					//$_SESSION['status']=true;
					$_SESSION['islogin']='yes';
					
					
				   
					
					
					if($_SESSION['unm']!="admin")
					{
						$qo="select u_email from user where u_unm='$unm'";
						$reso=mysqli_query($conn,$qo) or die("wrong query");
						$r=mysqli_fetch_assoc($reso);
			
			if(!empty($r))
			{
				
			}
						header("location:final.php");
						
					}
					else
					{
						$_SESSION['status']=true;
						header("location:admin/index.php");
					}
				}
				
				else
				{
					echo 'Incorrect Password';
				}
			}
			else
			{
				echo 'Invalid User';
			}
		}
	
	}
	else
	{
		header("location:index.php");
	}
			
?>
