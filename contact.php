<?php session_start();
require('includes/config.php');
if (isset ($_SESSION['activetime'])){
if ((time()-$_SESSION['activetime'])>60)
{header('location:logout.php');
die();
}}
?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
setInterval(function(){
	check_user();
},2000);
function check_user(){
	jQuery.ajax({
		url:'user_auth.php',
		type:'post',
		data:'type=ajax',
		success:function(result){
			if(result=='logout'){
				window.location.href='logout.php?sesh=1';
			}
		}
		
	});
}
</script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>
<style>
div.b {
  position: absolute;
  right: 150px;  
  width: 200px;
  height: 120px;
} 
div.c {
  width: 150px;
  height: 200px;
  position: relative;
  animation-name: example;
  animation-duration: 5s;
animation-iteration-count: infinite;
animation-direction: reverse;
}

@keyframes example {
 0%   {left:0px; top:0px;}
  25%  {left:100px; top:0px;}
  50%  {left:100px; top:250px;}
  75%  {left:0px; top:250px;}
  100% {left:0px; top:0px;}
}
}
</style>
</head>

<body>
			<!-- start header -->
					<div id="header">
						<div id="menu">
							<?php
								include("includes/menu.inc.php");
							?>
						</div>
					</div>
\
			<!-- end header -->
			
			<!-- start page -->

					<div id="page">
						<!-- start content -->
							<div id="content">
								<div class="post">
									<h1 class="title">Contact us</h1>
									<div class="b"><div class="c"><img src= "contactus.png" height=150px width=200px></div></div></h1>
									<div class="entry" >
									
										<form action="process_contact.php" method="POST">
												

											<br>Name :<br>
												<input type='text' name='nm' size=35>
												<br><br><br>
												
												E-mail ID:<br>
												<input type='text' name='email' size=35>
												<br><br><br>
												
												Query:<br>
												<textarea cols="40" rows="10" name='query' ></textarea>
												<br><br><br>

												<input  type='submit' name='btn' value='   OK   '  >

												
										</form>
									
									</div>
									
								</div>
								
							</div>
						<!-- end content -->
						
						<!-- start sidebar -->
						<div id="sidebar">
								<?php
									//include("includes/search.inc.php");
								?>
						</div>
						<!-- end sidebar -->
						
						<div style="clear: both;">&nbsp;</div>
					</div>
			<!-- end page -->
						
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
