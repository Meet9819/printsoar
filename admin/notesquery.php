<?php

// Database configuration
$dbHost     = 'localhost';
$dbUsername = 'printnuk_soar';
$dbPassword = 'soarprint@123';
$dbName     = 'printnuk_soarprint';



//$dbHost     = 'localhost';
//$dbUsername = 'root';
//$dbPassword = '';
//$dbName     = 'soarprint';


// Connect with the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Get search term
$searchTerm = $_GET['term'];

// Get matched data from vc table
$query = $db->query("SELECT * FROM vc WHERE cname LIKE '%".$searchTerm."%'  ORDER BY cname ASC");

// Generate vc data array
$skillData = array();
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $data['id'] = $row['id'];
        $data['value'] = $row['cname'];
        array_push($skillData, $data);
    }
}

// Return results as json encoded array
echo json_encode($skillData);

?>