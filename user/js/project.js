  /////////////////////////////////////Phone No. validation/////////////////////////////////////

  $("#frmsubmit").click(function (e) {
    // e.preventDefault();
    var mobile = $('#mobile').val();

    var validateMobNum = /^\d*(?:\.\d{1,2})?$/;
    if (validateMobNum.test(mobile) && mobile.length == 10 && mobile != "") {

      $.ajax({
        url: 'verifymob.php',
        type: 'GET',
        data: { mobile: mobile },
        success: function (data) {
          // console.log(data);
          console.log(typeof (data));
          if (data == "yes") {
            $('#mobotp').html("OTP sent").css('color', 'green');
            $('#frmsubmit').hide();
            $('#verifyotp').show();
            $('#fillmobotp').show();
          }
          else if (data == "no") {
            $('#mobotp').html("OTP not sent");
          }
        }

      });

    }
    else {
      $('#mobotp').html("**Invalid Mobile Number").css('color', 'red');
    }

  });


                $('#verifyotp').click(function (e) {
                    // e.preventDefault();
                    var filmobotp = $('#fillmobotp').val();


                    $.ajax({
                    url: 'verifymob.php',
                    type: 'GET',
                    data: { filmobotp: filmobotp },
                    success: function (data) {
                        // console.log(data)
                        if (data == "yes") {
                        $('#mobotp').html("OTP Verified").css('color', 'green');
                        $('#verifyotp').hide();
                        $('#fillmobotp').hide();

                            $('#signup').prop('disabled', false);
                            $('#signup').html("Sign UP");

                    
                        }
                        else if (data == "no") {
                        $('#mobotp').html("**OTP is wrong").css('color', 'red');
                        }

                    }

                    });

  });


  /////////////////////////////////////Phone No. validation/////////////////////////////////////

  ///////////////////check security answer selection//////////////////
  $('#dropdown').change(function(){
      var x=this.value;
      if(x!="Select A Security Question"){
          $('#answershow').show();
      }
      else{
        $('#answershow').hide();
      }

  });
    ///////////////////check security answer selection//////////////////