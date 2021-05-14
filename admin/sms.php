<!DOCTYPE html>
<html lang="en">

<?php 
include"allcss.php";    
?>


 <script type="text/javascript">
     function charcounts(startfrom, charend){
        var len=document.getElementById(startfrom).value.length;
        document.getElementById(charend).innerHTML = len;

        }
 </script>

<!-- DELETE KA CODE -->
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script language="JavaScript" type="text/javascript">
        $(document).ready(function() {
            $("a.delete").click(function(e) {
                if (!confirm('Are you sure?')) {
                    e.preventDefault();
                    return false;
                }
                return true;
            });
        });
    </script>
<!-- DELETE KA CODE -->


    <body class="hold-transition sidebar-mini">
        <!--preloader-->
        <div id="preloader">
            <div id="status"></div>
        </div>
        <!-- Site wrapper -->
        <div class="wrapper">
            <?php 
include"header.php";    
?>

                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <div class="header-icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="header-title">
                            <h1>Send SMS</h1>
                            <small></small>
                        </div>
                    </section>

                    <section class="content">
                        <div class="row">
                            <!-- Form controls -->
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">

                                    </div>
                                    <div class="panel-body">

                                        <?php
include('../db.php');
if(isset($_POST['save']))
{

          $too=$_POST['too']; 
          $message=$_POST['message'];
          $datee= date('d-m-y');
 $fromm=$_POST['fromm'];

          $save=mysqli_query($con,"INSERT INTO smsentry (too,message,datee,fromm) VALUES ('$too','$message','$datee','$fromm')");

  // Account details
 $username = 'soarindia';
 $password = '996645';
// Message details
 $senderid = $fromm;
 $type = 1;
 $product = 1;



 $mobile = $too;
 //$mobile = $_POST['too'];
 $message = $_POST['message'];

$credentials = 'username='.$username.'&password='.$password;

$data = '&sender='.$senderid.'&mobile='.$mobile.'&type='.$type.'&product='.$product.'&message='.$message;

 $url = 'http://makemysms.in/api/sendmultiplesms.php?'.$credentials.$data;

 $options = array (CURLOPT_RETURNTRANSFER => true , // return web page
 CURLOPT_HEADER => false , // don't return headers
 CURLOPT_FOLLOWLOCATION => false , // follow redirects
 CURLOPT_ENCODING => "" , // handle compressed
 CURLOPT_USERAGENT => "test" , // who am i test
 CURLOPT_AUTOREFERER => true , // set referer on redirect
 CURLOPT_CONNECTTIMEOUT => 120 , // timeout on connect
 CURLOPT_TIMEOUT => 120 , // timeout on response
 CURLOPT_MAXREDIRS => 10 ); // stop after 10 redirects

// Send the GET request with cURL
 $ch = curl_init ($url); 
 curl_setopt_array ($ch,$options); 
 $content = curl_exec ($ch); 
 $err = curl_errno ($ch); 
 $errmsg = curl_error ($ch); 
 $header = curl_getinfo ($ch); 
 $httpCode = curl_getinfo ($ch, CURLINFO_HTTP_CODE ); 
 curl_close ($ch); 

// Receive response
 $header ['errno'] = $err; 
 $header ['errmsg'] = $errmsg; 
 $header ['content'] = $content; 
echo  $header ['errmsg']; 

   ?>
                                            <script>
                                                alert('Message Delivered ...');
                                                window.location.href = 'sms.php';
                                            </script>
                                            <?php

    }
?>
                                                <form action="" method="post" enctype="multipart/form-data" class="col-md-6 col-md-offset-3">

                                                    <?php
error_reporting(E_ERROR | E_PARSE);

 $email = $_POST['email'];

 ?>




                              <div class="form-group">
                                 <label>Message From </label>


<select type="text" name="fromm" class="form-control">
    <option value="">----- Select Sender Id ----</option>
  
        <option value="SOARIN">SOARIN</option>  <option value="ANDGLO">ANDGLO</option>
          <option value="SCREEN">SCREEN</option>
</select>
                              </div>



                                                        <div class="form-group">
                                                            <label>Message To </label>

                                                            <input type="text" name="too" class="form-control" value="<?php echo substr($_POST['mobileno'],1); ?>" />

                                                        </div>

                                                        <div class="form-group">
                                                            <label>Message</label>

 <textarea type="text" name="message" id="value" class="form-control" 
 onkeyup="charcounts('value','countchar');" onkeydown="charcounts('value','countchar');"
 onmouseout="charcounts('value','countchar');" maxlength="170" rows="10" cols="30"></textarea>
                                                            <span class="help-block">Enter Message upto <span id="countchar">0</span> Characters</span>
                                                        </div>

                                                        <div class="col-md-12 text-center">
                                                            <input class="btn btn-add" type="submit" name="save" value="Send Message" />
                                                        </div>

                                                </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="btn-group" id="buttonexport">
                                            <a href="#">
                                                <h4>SMS History</h4>
                                            </a>

                                        </div>
                                    </div>

                                    <div class="panel-body">

                                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->

                                        <div class="table-responsive">

                                            <table id="datatable" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr class="info">
                                                        <th>Sr no</th>
                                                       <th>Sender Id</th> <th>Number</th>
                                                        <th>Message </th>
                                                        <th>Date</th>

                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <?php

                                                    include"../db.php";

                                                    /* code for data delete */
if(isset($_GET['del']))
{
    $SQL = $con->query("DELETE FROM smsentry WHERE id=".$_GET['del']);

}

/* code for data delete */
$result = mysqli_query($con,"SELECT * FROM smsentry order by id desc limit 5");

 $tmpCount = 1;

while($row = mysqli_fetch_array($result))
{

echo '  <tbody>
                                    <tr>

                                              ';?>
                                                    <td>
                                                        <?php echo $tmpCount++ ?>
                                                    </td>
                                                    <?php echo '
                                           <td> '.$row['fromm'].'</td>    <td> '.$row['too'].'</td>
  <td>'.$row['message'].'</td>
  <td>'.$row['datee'].'</td>

                                       <td>

                                         <a  class="delete" href="?del='.$row['id'].'"> <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button> </a>
                                       </td> 

                                    </tr>

                                        </tbody>

';
}
?>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <?php
include"footer.php";
 ?>