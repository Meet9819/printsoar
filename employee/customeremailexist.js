$('document').ready(function(){




  var emailid1_state = false;

//

var mobileno1_state = false;





  $('#emailid1').on('blur', function(){

 	var emailid1 = $('#emailid1').val();

 	if (emailid1 == '') {

 		emailid1_state = false;

 		return;

 	}

 	$.ajax({

      url: 'register.php',

      type: 'post',

      data: {

      	'emailid1_check' : 1,

      	'emailid1' : emailid1,

      },

      success: function(response){

      	if (response == 'taken' ) {

          emailid1_state = false;

          $('#emailid1').parent().removeClass();

          $('#emailid1').parent().addClass("form_error");

          $('#emailid1').siblings("span").text('Email Id already exist');

      	}else if (response == 'not_taken') {

      	 emailid1_state = true;

      	  $('#emailid1').parent().removeClass();

      	$('#emailid1').parent().addClass("form_success");

      	 $('#emailid1').siblings("span").text('');



         //    $('#emailid1').siblings("span").text('emailid1 available');

      	}

      }

 	});

 });

















   $('#mobileno1').on('blur', function(){

  var mobileno1 = $('#mobileno1').val();

  if (mobileno1 == '') {

    mobileno1_state = false;

    return;

  }

  $.ajax({

      url: 'register.php',

      type: 'post',

      data: {

        'mobileno1_check' : 1,

        'mobileno1' : mobileno1,

      },

      success: function(response){

        if (response == 'taken' ) {

          mobileno1_state = false;

          $('#mobileno1').parent().removeClass();

          $('#mobileno1').parent().addClass("form_error");

          $('#mobileno1').siblings("span").text('Mobile No already exist');

        }else if (response == 'not_taken') {

          mobileno1_state = true;

          $('#mobileno1').parent().removeClass();

          $('#mobileno1').parent().addClass("form_success");

          $('#mobileno1').siblings("span").text('');

        }

      }

  });

 });



















});