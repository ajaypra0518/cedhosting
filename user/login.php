<?php

if(isset($_SESSION['adminlogin'])){
	echo $_SESSION['adminlogin'];
	// unset($_SESSION['adminlogin']);
}
?>


	<!---header--->
		<?php include "header.php";
		include_once "../usertable.php";
		if(isset($_POST['login'])){
		$email=$_POST['email'];
		$password=md5($_POST['password']);
		$userTBobj=new UserTable();
		$returnval=$userTBobj->UserAdminCheck($email,$password);
		
		}

		
		?>




	<!---header--->
		<!---login--->
			<div class="content">
				<div class="main-1">
					<div class="container">
						<div class="login-page">
							<div class="account_grid">
								<div class="col-md-6 login-left">
									 <h3>new customers</h3>
									 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
									 <a class="acount-btn" href="account.php">Create an Account</a>
								</div>
								<div class="col-md-6 login-right">
									<h3>registered</h3>
									<p>If you have an account with us, please log in.</p>
									<form method="POST" onsubmit ="return loginValidate()">
									  <div>
										<span>Email Address<label>*</label></span>
										<input type="text" id="email" name="email" required> 
									  </div>
									  <div>
										<span>Password<label>*</label></span>
										<input type="password" id="password" name="password" required> 
									  </div>
									  <p style="color:red;"><?php if(isset($returnval))echo "User Name Or Pasword is Invalid"; ?></p>
									  <a class="forgot" href="#">Forgot Your Password?</a>
									  <input type="submit" value="Login" name="login">
									</form>
								</div>	
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- login -->
			
			<!---footer--->
			<?php include "footer.php";?>
			<!---footer--->

			<script>
        function loginValidate(){
          var email=$('#email').val().trim();
          var password=$('#password').val().trim();
          var emailReg=/^[a-zA-Z0-9.-]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$/;
          var passwordReg=/^(?!.* )(?=.*\d)(?=.*[a-zA-Z]).{8,16}$/;

        if(!emailReg.test(email)){
         
            alert("Please Insert Valid Email");
            return false;
         
        }
        else if(!passwordReg.test(password)){
           
           alert("Password Must be Included At Least One Lower, One Capital One Special Character And Between 8-16 Character")
            return false;
		}
		else{
			return true;
		}
    }
    </script>
			
</body>
</html>