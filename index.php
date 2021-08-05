<?php 
session_start();
$_SESSION['flag']=0;

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
		<link rel="stylesheet" href="snow.css">
</head>
<style>
.snowflake {
  color: #8798b0;
  font-size: 1em;
  font-family: Arial, sans-serif;
  text-shadow: 0 0 3px #000;
}

@-webkit-keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}@-webkit-keyframes snowflakes-shake{0%,100%{-webkit-transform:translateX(0);transform:translateX(0)}50%{-webkit-transform:translateX(80px);transform:translateX(80px)}}@keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}@keyframes snowflakes-shake{0%,100%{transform:translateX(0)}50%{transform:translateX(80px)}}.snowflake{position:fixed;top:-10%;z-index:9999;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:default;-webkit-animation-name:snowflakes-fall,snowflakes-shake;-webkit-animation-duration:10s,3s;-webkit-animation-timing-function:linear,ease-in-out;-webkit-animation-iteration-count:infinite,infinite;-webkit-animation-play-state:running,running;animation-name:snowflakes-fall,snowflakes-shake;animation-duration:10s,3s;animation-timing-function:linear,ease-in-out;animation-iteration-count:infinite,infinite;animation-play-state:running,running}.snowflake:nth-of-type(0){left:1%;-webkit-animation-delay:0s,0s;animation-delay:0s,0s}.snowflake:nth-of-type(1){left:10%;-webkit-animation-delay:1s,1s;animation-delay:1s,1s}.snowflake:nth-of-type(2){left:20%;-webkit-animation-delay:6s,.5s;animation-delay:6s,.5s}.snowflake:nth-of-type(3){left:30%;-webkit-animation-delay:4s,2s;animation-delay:4s,2s}.snowflake:nth-of-type(4){left:40%;-webkit-animation-delay:2s,2s;animation-delay:2s,2s}.snowflake:nth-of-type(5){left:50%;-webkit-animation-delay:8s,3s;animation-delay:8s,3s}.snowflake:nth-of-type(6){left:60%;-webkit-animation-delay:6s,2s;animation-delay:6s,2s}.snowflake:nth-of-type(7){left:70%;-webkit-animation-delay:2.5s,1s;animation-delay:2.5s,1s}.snowflake:nth-of-type(8){left:80%;-webkit-animation-delay:1s,0s;animation-delay:1s,0s}.snowflake:nth-of-type(9){left:90%;-webkit-animation-delay:3s,1.5s;animation-delay:3s,1.5s}.snowflake:nth-of-type(10){left:25%;-webkit-animation-delay:2s,0s;animation-delay:2s,0s}.snowflake:nth-of-type(11){left:65%;-webkit-animation-delay:4s,2.5s;animation-delay:4s,2.5s}
.ani {
 width: 150px;
 height: 150px;
 position: relative;
 animation: mymove 5s infinite;
 animation-direction: alternate;
}
@keyframes mymove {
 from {left: 0px;}
 to {left: 500px;}
}
.ani2 {
 width: 150px;
 height: 150px;
 position: relative;
 animation: mymove2 5s infinite;
 animation-direction: alternate;
}
@keyframes mymove2 {
 from {left: 500px;}
 to {left: 0px;}
}
</style>
<body >

			<!-- start header -->
			<!--<div class="snowflakes" aria-hidden="true">
  <div class="snowflake">
  ❅
  </div>
  <div class="snowflake">
  ❅
  </div><div class="snowflake">
  ❅
  </div><div class="snowflake">
  ❅
  </div><div class="snowflake">
  ❅
  </div><div class="snowflake">
  ❅
  </div><div class="snowflake">
  ❅
  </div><div class="snowflake">
  ❅
  </div><div class="snowflake">
  ❅
  </div><div class="snowflake">
  ❅
  </div><div class="snowflake">
  ❅
  </div><div class="snowflake">
  ❅
  </div>
  </div>-->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				
				<!-- <div id="logo-wrap">
					<div id="logo">
							<img src="images/bg.jpg">
					</div>
				</div> -->


				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">Welcome to 
							<?php 
								if(isset($_SESSION['status']))
								{ $_SESSION['activetime']=time();
									echo 'Librarium, ';
									echo $_SESSION['unm']; 
									$_SESSION['flag']=1;
									$current_time = time(); 
									
		
			
								}
								else
								{	

									echo 'Librarium</h1>';
								}
							
							?>
	

							
							<h4><br>          Access all your books sitting at home! Make use of your free time in the pandemic and learn something new!</h4>
							<div class="ani"><img src="book2.png" height 250px width=250px/></div>
							<div class="ani2"><img src="book3.png" height 250px width=250px/></div>
							<div class="ani"><img src="book4.png" height 250px width=250px/></div>
							<div class="entry">
							
								<br>
								
								<br>		
								
								
								<br><br>
								
							</div>
							
						</div>
						
					</div>
					
					<!-- end content -->
					
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
							if(isset($_GET['dis']))
											{
												echo '<p style="color:red">Session timed out. Please Log in again.</p>';
											}
							include("includes/loginhome.php");
								if ($_SESSION['flag']==1)
								{include("includes/search.inc.php");}
							?>
							<div class="box">
  <div class="inner">
    <span>Books!</span>
  </div>
  <div class="inner">
    <span>Books!</span>
  </div>
</div>
							
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
