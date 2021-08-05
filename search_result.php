<?php
require('includes/config.php');
 session_start();
	
	
	
	$search=$_GET['s'];
	$query="select *from book where b_nm like '%$search%'";
	$query2="select *from subcat where subcat_nm like '%$search%'";
	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
	$res2=mysqli_query($conn,$query2) or die("Can't Execute Query...");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
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
									<h1 class="title"><?php echo @$_GET['cat'];?></h1>
									<div class="entry">
										<table border="3" width="100%" >
											<?php
												$count=0;
												$executeOnce=0;
												
												while($row=mysqli_fetch_assoc($res))
												{
													if($executeOnce==0){
														echo
														'<h4>BOOKS :</h4><br>';
													}
													$executeOnce++;
													if($count==0)
													{
														echo '<tr>';
													}
													
													echo '<td valign="top" width="20%" align="center">
														<a href="detail.php?id='.$row['b_id'].'">
														<img src="'.$row['b_img'].'" width="80" height="100">
														<br></a><br><a href="'.$row['b_pdf'].'" target="_blank">'.$row['b_nm'].'</a>
													</td>'; 
													$count++;							
													
													if($count==4)
													{
														echo '</tr>';
														$count=0;
													}
												}

											?>
											</table>
											<table border="3" width="100%" >
											<?php
											$count2=0;
											$executeOnce=0;
						
						
						
												while($row2=mysqli_fetch_assoc($res2))
												{
													if($executeOnce==0){
														echo
														'<br><h4>COURSES :</h4>';
													}
													$executeOnce++;
													if($count2==0)
													{
														
														echo '<tr>';
													}
													
													echo '<td valign="top" width="20%" align="center">
														<a href="booklist.php?subcatid='.$row2['subcat_id'].'&subcatnm='.$row2['subcat_nm'].'">'.$row2['subcat_nm'].'
														
														<br><a></td>';
													$count2++;							
													
													if($count2==4)
													{
														echo '</tr>';
														$count2=0;
													}
												}
											?>
											
										</table>
									</div>
									
								</div>
								
							</div>
					<!-- end content -->
					
					<!-- start sidebar -->
							<div id="sidebar">
									<?php
										include("includes/search.inc.php");
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
