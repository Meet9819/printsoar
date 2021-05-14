<?php
//$con = mysqli_connect('localhost','root','','soarprint');

$con = mysqli_connect('localhost','printnuk_soar','soarprint@123','printnuk_soarprint');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>


