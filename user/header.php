<?php 
$conn=mysqli_connect('localhost','root','','cedhosting');
$query= "select * from tbl_product where prod_parent_id=1";
$result=mysqli_query($conn,$query);
// include_once "../classess.php";
// $obj=new ProductTable();


 ?>
<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<i class="sr-only">Toggle navigation</i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
							</button>				  
							<div class="navbar-header" >
								<h1 style="padding-top:15px;"><a href="index.html">Ced Hosting</a></h1>
							</div>
						</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="services.php">Services</a></li>
							
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hosting<i class="caret"></i></a>
									<ul class="dropdown-menu">
										<!-- <li><a href="cmshosting.php">CMS Hosting</a></li>
										<li><a href="wordpresshosting.php">WordPress Hosting</a></li>
										<li><a href="machosting.php">Mac Hosting</a></li>
										<li><a href="windowshosting.php">Windows Hosting</a></li>
										<li><a href="linuxhosting.php">Linux hosting</a></li>
										<li><a href="unixhosting.">Unix 1.0</a></li> -->
										<?php
										while($row=mysqli_fetch_assoc($result)){											
									
										?>
										<li><a href="<?php echo $row['link']; ?>"><?php echo $row['prod_name']; ?></a></li>
									<?php } ?>
									
									</ul>			
								</li>
								<li><a href="pricing.php">Pricing</a></li>
								<li><a href="blog.php">Blog</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="cart.php">Cart</a></li>
								<li><a href="login.php">Login</a></li>
							</ul>
									  
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>