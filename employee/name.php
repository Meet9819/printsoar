<?php
//$connect = mysqli_connect("localhost", "root", "", "soarprint");

$connect = mysqli_connect("localhost", "printnuk_soar", "soarprint@123", "printnuk_soarprint");

$number = count($_POST["contactpersonn"]);
if($number > 1)
{
	for($i=0; $i<$number; $i++)
	{
		if(trim($_POST["contactpersonn"][$i] != ''))
		{
			$sql = "INSERT INTO vcadd(contactpersonn) VALUES('".mysqli_real_escape_string($connect, $_POST["contactpersonn"][$i])."')";
			mysqli_query($connect, $sql);
		}
	}
	echo "Data Inserted";
}
else
{
	echo "Please Enter Name";
}