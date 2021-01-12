	   <div class="row">
      <div class="col-xl-5 col-lg-5 col-md-7 col-sm-8 col-xs-12 mx-auto">
        <form class="form1 pb-3 pt-0 px-4 my-4" id="signform">
        <!-- <h3 class="text-center py-0">Login</h3> -->
          <div class="form-group mt-4 mb-0">
            <label> Name:</label>
            <input type="text" class="form-control col-12" name="name" required>
          </div>
       

          <div class="form-group pb-0 mb-0">
            <label>Email:</label>
            <input type="text" class="form-control  col-12" name="email" id="email" required>
          </div>
          
          <div class="form-group mt-2 mb-0">
            <label>Mobile No.:</label>
            <input type="number" class="form-control  col-12" name="mobile" id="mobile" required>
          </div>
          <p id="mobotp"  class="mb-1"> </p>

          <input type="text" id="fillmobotp" placeholder="Enter OTP">
          <input type="button" value="Click To Verify OTP" name="checkotp"  id="verifyotp">
          <input type="button" value="Verify Mob No." id="frmsubmit" name="submit">
        
          <div class="form-group mt-2 ">
            <label>Password:</label>
            <input type="text" class="form-control  col-12" name="password" required>
          </div>
          <p id="signstatus" class="mb-1"></p>

          <button  class="btncol  btn-lg btn-block" name="signup" id="signup" disabled>Submit Unavilable </button>

        </form>
      </div>
    </div>