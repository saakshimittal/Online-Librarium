<?php session_start();
if (isset ($_SESSION['activetime'])){
if ((time()-$_SESSION['activetime'])>60)
{header('location:logout.php');
die();
}}?>
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
  100% {left:500px; top:0px;}
}</style>
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
							<h1 class="title">About Us</h1>
							<div class="entry" style="height:auto">
								IWP project by:</br>
								<ol><p><b>
								
								<li>Saakshi Mittal 18BCE0985</li>
								<li>Anukriti Baijal 18BCE2323</li>
								<li>Peri Nagasri Anusha 18BCE2338</li>
								<li>Namya Sehgal 18BCI0254</li></b></p></ol>
								Under the guidance of Professor Ragunthar T.<br><br><br><br>
								<div class="c"><img src= "thank.png" height=250px width=300px></div>
							</div>
							
						</div>
						
					</div>
					
					
					<div id="sidebar">
							<?php
								//include("includes/search.inc.php");
							?>
					</div>
					
					<div style="clear: both;">&nbsp;</div>
				</div>

				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			
</body>
</html>
