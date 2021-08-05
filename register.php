<?php session_start();

if (isset ($_SESSION['activetime'])){
if ((time()-$_SESSION['activetime'])>10)
{header('location:logout.php');
die();
}} ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
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
  animation-duration: 3s;
animation-iteration-count: infinite;
animation-direction: alternate;
}

@keyframes example {
  0%   {left:0px; top:0px;}
  100% {left:0px; top:300px;}
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

			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
						<!-- start content -->
				
							<div id="content">
					
								<div class="post">
									<h1 class="title">Welcome to Registeration!
						<div class="b"><div class="c"><img src= "welcome.png" height=200px width=250px></div></div></h1>
									<div class="entry">
									<br><br>
										<?php
											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											
											if(isset($_GET['ok']))
											{
												echo '<font color="blue">You are registered.</font>';
												echo '<br><br>';
											}
										
										?>
									
										<table>
											<form action="process_register.php" method="POST">
												<tr>
													<td><b>Full Name :</b>&nbsp;&nbsp;</td>
													<td><input type='text' size="30" maxlength="30" name='fnm'></td>
												
												</tr>
												
											
												
												<tr>
													 <td><b>User Name :</b>&nbsp;&nbsp;</td>
													 <td><input type='text' size="30" maxlength="30" name='unm'></td>
													 <td>&nbsp;</td>
													
												</tr>
												
												
												
												<tr>
													<td><b>Password :</b>&nbsp;&nbsp;</td>
													<td><input type='password' name='pwd' size="30"></td>
													 
												</tr>
												
												
												
												<tr>
													<td><b>Confirm Password:</b>&nbsp;&nbsp;</td>
													<td><input type='password' name='cpwd' size="30"></td>
													
												</tr>
												
												
												
												<tr>
													<td><b>Gender:</b>&nbsp;&nbsp;</td>
													<td><input type="radio"  value="Male" name="gender" id='m'><label> Male</label>&nbsp;&nbsp;&nbsp;
														<input type="radio" value="Female" name="gender" id='f'><label>Female</label></td>
														<td>&nbsp;</td>
												</tr>
												
																								<tr>
													<td><b>Contact No.:</b>&nbsp;&nbsp;</td>
													<td><input type='text' name='contact' size="30"></td>
													
												</tr>

																				
												<tr>
													<td><b>E-mail Address:</b>&nbsp;&nbsp;</td>
													<td><input type='text' name='mail' size="30"></td>
													
												</tr>
												
												
												
												
													<tr><td>&nbsp;</tr>
												<tr>
													<td colspan='2' align='center'>
													
														<input type='submit' value=" REGISTER ">
													</td>
												</tr>
											</form>
										</table>
									</div>
									
								</div>
					
					
							</div>
			
						<!-- end content -->
						
						<!-- start sidebar -->
						<!--<div id="sidebar">
								<?php
									//include("includes/search.inc.php");
								?>
						</div>-->
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
