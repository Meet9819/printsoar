
  <?php
//Database connection by using PHP PDO
//$username = 'root';
//$password = '';
//$connection = new PDO( 'mysql:host=localhost;dbname=soarprint', $username, $password ); // Create Object of PDO class by connecting to Mysql database

//Database connection by using PHP PDO
$username = 'printnuk_soar';
$password = 'soarprint@123';
$connection = new PDO( 'mysql:host=localhost;dbname=printnuk_soarprint', $username, $password ); // Create Object of PDO class by connecting to Mysql database


if(isset($_POST["action"])) //Check value of $_POST["action"] variable value is set to not
{




 //For Load All Data
 if($_POST["action"] == "load") 
 {


//$abc = $_POST["vcid"];


$var = $_POST["vcid"];


// $statement = $connection->prepare("SELECT * FROM vcadd");
  $statement = $connection->prepare("SELECT * FROM vcadd where vcid = $var");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = '';
  $output .= '
   <table class="table table-bordered">';
  if($statement->rowCount() > 0)
  {
   foreach($result as $row)
   {
    $output .= '
     <div class="col-sm-12">
    <div class="panel panel-bd " style="box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);">
        <div class="panel-heading" style="text-align:right">
<!--    '.$row["vcid"].' -->

          

     <button type="button" id="'.$row["id"].'" class="btn btn-default btn-md update"><i style="color:#009688e6" class="fa fa-pencil"></i></button>
    <button type="button" id="'.$row["id"].'" class="btn btn-default btn-md delete"><i style="color:#009688e6" class="fa fa-times"></i></button>
        </div>

        <div class="panel-body"> 

        <div class="col-sm-4">

                <div class="form-group">
                    <label>Contact Person </label>
                    <input type="text" class="form-control" placeholder="Enter the Name of Contact Person" value="'.$row["contactpersonn"].'" disabled="">

                </div>

            </div>

            <div class="col-sm-4">

                <div class="form-group">
                    <label>Department </label>
                    <input type="text" class="form-control" placeholder="Enter your Department in Company" value="
     '.$row["departmentt"].'" disabled="">

                </div>

            </div>

            <div class="col-sm-4">

                <div class="form-group">
                    <label>Job / Title </label>
                    <input type="text" class="form-control" placeholder="Enter your Job / Title in Company" value="'.$row["jobtitlee"].'" disabled="">

                </div>

            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label>Mobile No 1 </label>
                    <input type="number" class="form-control" placeholder="Enter your Mobile No " value="'.$row["mobile11"].'" disabled="">
                </div>

            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label>Mobile No 2 </label>
                    <input type="number" class="form-control" placeholder="Enter your Mobile No " value="'.$row["mobile22"].'" disabled="">
                </div>

            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label>Landline No </label>
                    <input type="number" class="form-control" placeholder="Enter your Landline No " value="'.$row["landlinee"].'" disabled="">
                </div>

            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label>Email Id 1 </label>
                    <input type="email" class="form-control" placeholder="Enter your Email Id  " value="'.$row["emailid11"].'" disabled="">
                </div>

            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label>Email Id 2 </label>
                    <input type="email" class="form-control" placeholder="Enter your Email Id" value="'.$row["emailid22"].'" disabled="">
                </div>

            </div>



    </div>
    </div>
</div>
    ';
   }
  }
  else
  {
   $output .= '
   Data not Found
   ';
  }
  $output .= '</table>';
  echo $output;
 }
















 //This code for Create new Records
 if($_POST["action"] == "Create")
 {
  $statement = $connection->prepare("INSERT INTO vcadd (contactpersonn,departmentt,vcid,jobtitlee,landlinee, mobile11,mobile22,emailid11,emailid22)VALUES (:contactpersonn, :departmentt, :vcid, :jobtitlee, :landlinee, :mobile11, :mobile22, :emailid11, :emailid22)
  ");
  $result = $statement->execute(
   array(
    ':contactpersonn' => $_POST["contactpersonn"],
    ':departmentt' => $_POST["departmentt"],
        ':vcid' => $_POST["vcid"],
        ':jobtitlee' => $_POST["jobtitlee"],
        ':landlinee' => $_POST["landlinee"],
         ':mobile11' => $_POST["mobile11"],
        ':mobile22' => $_POST["mobile22"],
        ':emailid11' => $_POST["emailid11"],
        ':emailid22' => $_POST["emailid22"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Inserted';
  }
 }














 //This Code is for fetch single customer data for display on Modal
 if($_POST["action"] == "Select")
 {
  $output = array();
  $statement = $connection->prepare(
   "SELECT * FROM vcadd 
   WHERE id = '".$_POST["id"]."' 
   LIMIT 1"
  );
  $statement->execute();
  $result = $statement->fetchAll();
  foreach($result as $row)
  {
   $output["contactpersonn"] = $row["contactpersonn"];
   $output["departmentt"] = $row["departmentt"];

    $output["vcid"] = $row["vcid"];
  $output["jobtitlee"] = $row["jobtitlee"];
    $output["landlinee"] = $row["landlinee"];


      $output["mobile11"] = $row["mobile11"];
        $output["mobile22"] = $row["mobile22"];
          $output["emailid11"] = $row["emailid11"];
            $output["emailid22"] = $row["emailid22"];
  }
  echo json_encode($output);
 }




  

 if($_POST["action"] == "Update")
 {
  $statement = $connection->prepare(
   "UPDATE vcadd 
   SET contactpersonn = :contactpersonn, departmentt = :departmentt, vcid = :vcid, jobtitlee = :jobtitlee, landlinee = :landlinee, mobile11 = :mobile11, mobile22 = :mobile22, emailid11 = :emailid11, emailid22 = :emailid22 WHERE id = :id
   "
  );
  $result = $statement->execute(
   array(
    ':contactpersonn' => $_POST["contactpersonn"],
    ':departmentt' => $_POST["departmentt"],
    ':vcid' => $_POST["vcid"],
    ':id'   => $_POST["id"],
    ':jobtitlee'   => $_POST["jobtitlee"],
    ':landlinee'   => $_POST["landlinee"],

    ':mobile11'   => $_POST["mobile11"],
    ':mobile22'   => $_POST["mobile22"],
    ':emailid11'   => $_POST["emailid11"],
    ':emailid22'   => $_POST["emailid22"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Updated';
  }
 }














 if($_POST["action"] == "Delete")
 {
  $statement = $connection->prepare(
   "DELETE FROM vcadd WHERE id = :id"
  );
  $result = $statement->execute(
   array(
    ':id' => $_POST["id"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Deleted';
  }
 }













}

?>
  
