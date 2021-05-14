<?php 

//  $db = mysqli_connect('localhost', 'root', '', 'soarprint');


$db = mysqli_connect('localhost','printnuk_soar','soarprint@123','printnuk_soarprint');


if (isset($_POST['emailid1_check'])) {

  	$emailid1 = $_POST['emailid1'];

  	$sql = "SELECT * FROM vc WHERE emailid1='$emailid1'";

  	$results = mysqli_query($db, $sql);

  	if (mysqli_num_rows($results) > 0) {

  	  echo "taken";	

  	}else{

  	  echo 'not_taken';

  	}

  	exit();

  }











if (isset($_POST['mobileno1_check'])) {

    $mobileno1 = $_POST['mobileno1'];

    $sql = "SELECT * FROM vc WHERE mobileno1='$mobileno1'";

    $results = mysqli_query($db, $sql);

    if (mysqli_num_rows($results) > 0) {

      echo "taken"; 

    }else{

      echo 'not_taken';

    }

    exit();

  }

?>









<html>

<body>



 <form>

     

      <div id="error_msg"></div>

	

	  <div>

	    <input type="emailid1" name="emailid1" placeholder="emailid1" id="emailid1">

		<span></span>

	  </div>

	 

   <div id="error_msg"></div>

  

    <div>

      <input type="text" name="mobileno1" placeholder="mobileno1" id="mobileno1">

    <span></span>

    </div>

   

	</form>







</body>

</html>

<!-- scripts -->

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="customeremailexist.js"></script>