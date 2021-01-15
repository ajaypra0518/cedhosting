<!--
A
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Account :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---fonts-->
<!--script-->


<!------------------------ custom ----------------------->
<link re="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">

</script>

<link rel="stylesheet" href="css/custom.css" type="text/css" >

<!------------------------ custom ----------------------->

<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>
<!--script-->



<style>
	.custom_feild{
		border: 1px solid #555;
    outline-color: #FD9F3E;
    width: 96%;
    font-size: 1em;
    padding: 0.5em;
	}

	.btncol{
    background-color:rgba(0, 0, 0, 0.623);
    color:white;
  }

  
  #verified,
  #fillotp {
    display: none;
  }

  #otpstatus {
    color: red;
  }
  #checkotp{
    padding:0 12px;
  }

  .ershow{
      color:red;
    }
    #mobotp{
        color:red;
    }
    #verifyotp,#fillmobotp{
       display:none;
    }

    .error{
      color:red;
    }
     
     /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}


	
</style>
</head>
<body>
	<!---header--->
	
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
		
		<!---header--->

		<!---login--->
			<div class="content">
				<!-- registration -->
	<div class="main-1">
		<div class="container">

		   <div class="row">
      <div class="col-xl-5 col-lg-5 col-md-7 col-sm-8 col-xs-12 mx-auto">
        <form class="form1 pb-3 pt-0 px-4 my-4" id="signform" action="account1.php" method="POST">
       
          
          <div class="form-group mt-2 mb-0">
            <label>Mobile No.:</label>
            <input type="number" class="form-control  col-12" name="mobile" id="mobile" required>
          </div>
          <p id="mobotp"  class="mb-1"> </p>

          <input type="text" id="fillmobotp" placeholder="Enter OTP">
          <input type="button" value="Click To Verify OTP" name="checkotp"  id="verifyotp">
		  <input type="button" value="Verify Mob No." id="frmsubmit" name="submit">
		  
		  
          <p id="signstatus" class="mb-1"></p>
         <div style="margin-top:20px; margin-bottom:50px;">
		 <button type="submit"  class="btn btncol btn-block" name="verifymob"   >Verify Mobile No. For Signup</button>
		 </div>
        </form>
      </div>
    </div>
		 </div>
	</div>
<!-- registration -->

			</div>
<!-- login -->
			

	<!---footer--->
	
	<?php include "footer.php";?>
		
		<!---footer--->

	<script src="js/project.js"></script>	
</body>
</html>