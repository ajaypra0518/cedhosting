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
	
	<?php include "header.php";?>
		
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