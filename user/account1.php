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
#answershow{
    display:none;
}


	
</style>
</head>
<body>
	<!---header--->
	
	<?php include "header.php";?>
		
        <!---header--->
        

       <?php
       if(isset($_POST['signup'])){
           $name=trim($_POST['name']);
           $email=trim($_POST['email']);
           $password=md5(trim($_POST['password']));  
           $dropdown=trim($_POST['dropdown']);
           $answer=trim($_POST['answer']);
          

       }
       ?>

		<!---login--->
			<div class="content">
				<!-- registration -->
	<div class="main-1">
		<div class="container">

		   <div class="row">
      <div class="col-xl-5 col-lg-5 col-md-7 col-sm-8 col-xs-12 mx-auto">
        <form class="form1 pb-3 pt-0 px-4 my-4" id="signform" onsubmit="return funValidate()" method="POST">
     
          <div class="form-group mt-4 mb-0">
            <label> Name:</label>
            <input type="text" class="form-control col-12" name="name" id="name" required>
          </div>
          <p id="name_error"></p>
       
          <div class="form-group pb-0 mb-0">
            <label>Email:</label>
            <input type="text" class="form-control  col-12" name="email" id="email" required>
          </div>
          <p id="email_error"></p>
           
		  
          <div class="form-group pb-0 mb-0">
            <label>Security Question</label>
			  <select  class="form-control  col-12" id="dropdown" name="dropdown">
            <option value="Select A Security Question">Select A Security Question</option>
              <option value="What was your childhood nickname?">What was your childhood nickname?</option>
              <option value="What is the name of your favourite childhood friend?">What is the name of your favourite childhood friend?</option>
            <option value="What was your favourite place to visit as a child?">What was your favourite place to visit as a child?</option>
            <option value="What was your dream job as a child?">What was your dream job as a child?</option>    
            <option value="What is your favourite teacher's nickname?">What is your favourite teacher's nickname?</option>
            </select>
            </div>

            <div class="form-group pb-0 mb-0"  id="answershow">
            <label>Enter Your Answer:</label>
            <input type="text" class="form-control  col-12" name="answer" id="answer" required>
          </div>
          <p id="name_error"></p>
        
          <div class="form-group mt-2 ">
            <label>Password:</label>
            <input type="text" class="form-control  col-12" name="password" id="password" required>
          </div>
          <p id="pass_error"></p>

          <div class="form-group mt-2 ">
            <label>Confirm Password:</label>
            <input type="text" class="form-control  col-12" name="cnfrmpassword" id="cnfrmpassword" required>
          </div>
          <p id="cnfrmpass_error"></p>

          <p id="signstatus" class="mb-1"></p>
          <div style="margin-top:20px; margin-bottom:50px;">
          <button  class="btn btncol btn-block" name="signup" id="signup" >Click Here For Signup</button>
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
    <script>
        function funValidate(){
          var name=$('#name').val().trim();
          var email=$('#email').val().trim();
          var dropdown=$('#dropdown').val().trim();
          var answer=$('#answer').val().trim();
          var password=$('#password').val().trim();
          var cnfrmpassword=$('#cnfrmpassword').val().trim();

          var nameReg=/^([a-zA-Z]+\s?)*$/;
          var emailReg=/^[a-zA-Z0-9.-]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$/;
          var passwordReg=/^(?!.* )(?=.*\d)(?=.*[a-zA-Z]).{8,16}$/;
        //   var regMobile=/^(0)?[1-9]{1}[0-9]{9}$/;
        console.log(nameReg.test(name));

      
        if(!nameReg.test(name)){
            // $('#name_error').html("Please Insert Valid Name").css('color','red').delay(4000).fadeOut(600);
            alert("Please Insert Valid Name");
            return false; 
        }
        else if(!emailReg.test(email)){
            // $('#email_error').html("Please Insert Valid Email").css('color','red').fadeOut(4000);
            alert("Please Insert Valid Email");
            return false;
         
        }
        else if(!passwordReg.test(password)){
            // $('#pass_error').html("Password Must be Included At Least One Lower, One Capital One Special Character And Between 8-16 Character").css('color','red').fadeOut(4000);
           alert("Password Must be Included At Least One Lower, One Capital One Special Character And Between 8-16 Character")
            return false;
        }
        else if(cnfrmpassword!=password){
            // $('#cnfrmpass_error').html("Confirm Password is Not Mached").css('color','red').fadeOut(4000);
            alert("Confirm Password is Not Mached");
            return false;
        }
        else if(isNan(answer)){
            // $('#cnfrmpass_error').html("Only number not allowed").css('color','red').fadeOut(4000);
            alert("Only number not allowed");
           
        }
        else{
            return true;
        }
       
       
        
        
        
        
       

    }
    </script>

</body>
</html>