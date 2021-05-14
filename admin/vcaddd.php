


<?php

error_reporting(0);

//$connect = mysqli_connect("localhost", "root", "", "soarprint");
$connect = mysqli_connect("localhost", "printnuk_soar", "soarprint@123", "printnuk_soarprint");

 
   $datee=$_POST['datee'];
    $entryperson=$_POST['entryperson'];

   $id=$_POST['id'];
  $cname=$_POST['cname'];
  $mobileno1=$_POST['mobileno1'];
    $emailid1=$_POST['emailid1'];


  $contactperson=$_POST['contactperson'];
        $department=$_POST['department'];
        $jobtitle=$_POST['jobtitle'];

          $mobileno2=$_POST['mobileno2'];
        $landline=$_POST['landline'];  
   $emailid2=$_POST['emailid2'];





 $pincode=$_POST['pincode'];
        $state=$_POST['state'];
        $country=$_POST['country'];  
        $city=$_POST['city'];
        $suburb=$_POST['suburb'];
        $addressline1=$_POST['addressline1'];
        $addressline2=$_POST['addressline2'];

        $landlineno1=$_POST['landlineno1'];      
        $landlineno2=$_POST['landlineno2'];  

        $fax=$_POST['fax'];      
        $website=$_POST['website'];  
        $companyprofile=$_POST['companyprofile'];   

    $panno=$_POST['panno'];
        $gstno=$_POST['gstno'];

  $companyprofile=$_POST['companyprofile'];      
    $cc = implode(',',$_POST['companycategory']);
        $companycategory = $cc; 

        $ci = implode(',',$_POST['companyindustries']);
        $companyindustries = $ci; 

        $cp = implode(',',$_POST['companyproducts']);
        $companyproducts = $cp; 

        $ce = implode(',',$_POST['companyexhibitions']);
        $companyexhibitions = $ce; 



 $sql=mysqli_query($connect,"INSERT INTO vc (datee,entryperson,id,cname,mobileno1,emailid1,contactperson,department,jobtitle,mobileno2,landline,emailid2,pincode,state,country,city,suburb,addressline1,addressline2,landlineno1,landlineno2,fax,website,companyprofile,panno,gstno,companycategory,companyindustries,companyproducts,companyexhibitions) VALUES ('$datee','$entryperson','$id','$cname','$mobileno1','$emailid1','$contactperson','$department','$jobtitle','$mobileno2','$landline','$emailid2','$pincode','$state','$country','$city','$suburb','$addressline1','$addressline2','$landlineno1','$landlineno2','$fax','$website','$companyprofile','$panno','$gstno','$companycategory','$companyindustries','$companyproducts','$companyexhibitions'
)");

 

$number = count($_POST["vcid"]);
$number = count($_POST["contactpersonn"]);
$number = count($_POST["departmentt"]);
$number = count($_POST["jobtitlee"]);

$number = count($_POST["mobile11"]);
$number = count($_POST["mobile22"]);
$number = count($_POST["landlinee"]);
$number = count($_POST["emailid11"]);
$number = count($_POST["emailid22"]);


if($number > 0)
{
	for($i=0; $i<=$number; $i++)
	{
		if(trim($_POST["contactpersonn"][$i] != ''))
		{
			$sql = "INSERT INTO vcadd(vcid,contactpersonn,departmentt,jobtitlee,mobile11,mobile22,landlinee,emailid11,emailid22) VALUES('".mysqli_real_escape_string($connect, $_POST["vcid"][$i])."','".mysqli_real_escape_string($connect, $_POST["contactpersonn"][$i])."','".mysqli_real_escape_string($connect, $_POST["departmentt"][$i])."','".mysqli_real_escape_string($connect, $_POST["jobtitlee"][$i])."','".mysqli_real_escape_string($connect, $_POST["mobile11"][$i])."','".mysqli_real_escape_string($connect, $_POST["mobile22"][$i])."','".mysqli_real_escape_string($connect, $_POST["landlinee"][$i])."','".mysqli_real_escape_string($connect, $_POST["emailid11"][$i])."','".mysqli_real_escape_string($connect, $_POST["emailid22"][$i])."')";
			mysqli_query($connect, $sql);
		}
	}
	//echo "Data Inserted";
}

//else
 //{ echo "Please Enter Name";
//}

 