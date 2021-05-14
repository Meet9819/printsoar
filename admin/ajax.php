<?php 

$db= new mysqli('localhost','printnuk_soar','soarprint@123','printnuk_soarprint'); 
//$db= new mysqli('localhost','root','','soarprint'); 


extract($_POST);
$user_id=$db->real_escape_string($id);
$status=$db->real_escape_string($status);
$sql=$db->query("UPDATE adminlogin SET status='$status' WHERE id='$id'");
echo $sql;
//echo 1;
?>
