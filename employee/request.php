<?php


error_reporting(E_ALL);
ini_set('display_errors',1);


$hostname = "localhost";
$username = "printnuk_soar";
$password = "soarprint@123";
$dbname = "printnuk_soarprint";


//$hostname = "localhost";
//$username = "root";
//$password = "";
//$dbname = "pincodes";

$q = $_GET['q'];
if(isset($q) || !empty($q)) {
	$con = mysqli_connect($hostname, $username, $password, $dbname);
    $query = "SELECT * FROM pincodes WHERE pincode LIKE '$q%'";
    $result = mysqli_query($con, $query);
    $res = array();
    while($resultSet = mysqli_fetch_assoc($result)) {


     $res[$resultSet['id']]['id'] =  $resultSet['pincode']."-".$resultSet['egionname']."-".$resultSet['statename'];

     $res[$resultSet['id']]['value'] =  "Pincode: ".$resultSet['pincode'].", City: ".$resultSet['egionname'].", State: ".$resultSet['statename'];

    $res[$resultSet['id']]['label'] =   "Pincode: ".$resultSet['pincode'].", City: ".$resultSet['egionname'].", State: ".$resultSet['statename'];
    
    }
    if(!$res) {
    	$res[0] = 'Not found!';
    }
    echo json_encode($res);
}

?>
