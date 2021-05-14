<!DOCTYPE html>
<html lang="en">

      <?php 
include"allcss.php";    
?>


<script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>


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
                  <h1>Send Email</h1>
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
   
   error_reporting(0);
   
   
   
   use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';



include('../db.php');
if (!isset($_FILES['image']['tmp_name'])) {
    echo "";
    }else{
    $file=$_FILES['image']['tmp_name'];
    $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name= addslashes($_FILES['image']['name']);

            move_uploaded_file($_FILES["image"]["tmp_name"],"img/" . $_FILES["image"]["name"]);

            $img="" . $_FILES["image"]["name"];
          
           $too=$_POST['too'];
           
            $message=$_POST['message'];
            $datee= date('d-m-y');
            $subject=$_POST['subject'];
            $fromm=$_POST['fromm'];


            $save=mysqli_query($con,"INSERT INTO emailentry (img, too,message,datee,subject,fromm) VALUES ('$img','$too','$message','$datee','$subject','$fromm')");





$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.printsoar.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'admin@printsoar.com';                 // SMTP username
    $mail->Password = 'Admin@123!@#';                           // SMTP password
    $mail->SMTPSecure = 'TLS';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                     // TCP port to connect to

    //Recipients
  //  $mail->setFrom('admin@printsoar.com', 'Soar Print');

 $mail->setFrom($_POST['fromm'], 'Soar Print');


   // $mail->addAddress('meetshah9819@gmail.com');     // Add a recipient
  // $mail->addAddress('shedgesumit300@gmail.com');  
//$mail->addAddress('ellen@example.com');  
//$mail->addAddress('ellen@example.com');  

    // if u will add in above format then mail mail id will be visible to everyone 

      //  $mail->addCC($_POST['too']);    
  //$mail->addCC('shedgesumit300@gmail.com','meetshah9819@gmail.com');
 
 //$mail->addBCC('meetshah9819@gmail.com','shedgesumit300@gmail.com');



$test = $_POST['too'];
$count = substr_count($test, ",");//count the no of  ,
//echo $count;

$var=(explode(",",$test));//seprating value fromvariable from ,
for ($i=0; $i <= $count ; $i++) { 
  
  $mail->addBCC($var[$i]); 
}


    //Attachments
  //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('img/'.$_FILES["image"]["name"].'', 'Attachments');    // Optional name


$body = $_POST['message'];
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    
    
    
               ?>
                <script>
                alert('Message has been sent');
             //  window.location.href='emaillist.php';
                </script>
                <?php
                
 //   echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}





               
    }
?>

 <form  action="" method="post" enctype="multipart/form-data" class="col-md-6 col-md-offset-3">
                           

 <?php
error_reporting(E_ERROR | E_PARSE);

 $email = $_POST['email'];


 ?>
  


                              <div class="form-group">
                                 <label>Email From </label>


<select type="text" name="fromm" class="form-control">
    <option value="">----- Select Mail Id ----</option>
    <option value="admin@printsoar.com">admin@printsoar.com</option>
    
      <option value="nileshandglobal@printsoar.com">nileshandglobal@printsoar.com</option>
        <option value="jigneshscreentex@printsoar.com">jigneshscreentex@printsoar.com</option>
        <option value="ratanindia@printsoar.com">ratanindia@printsoar.com</option>
        <option value="omkarengineering@printsoar.com">omkarengineering@printsoar.com</option>
        
        
        
     
</select>
                              </div>
                             

                              <div class="form-group">
                                 <label>Email To </label>

<input type="text" name="too" class="form-control" value="<?php echo substr($_POST['mobileno'],1); ?>" />

                              </div>

  <div class="form-group">
                                 <label>Subject </label>

<input type="text" name="subject" class="form-control" value="" />

                              </div>






                                           <div class="form-group">
                                            <label>Message</label>
                                            

                                              <textarea class="form-control" name="message" id="text">Enter Your Message</textarea>
    <script>
        CKEDITOR.replace( 'text' );
    </script>

                                              
                                        </div>


                                      <div class="form-group">
                                            <label >Attachment</label>
                                                <input type="file" class="fileinput btn-primary" name="image" />
                                                <span class="help-block">Choose Image or PDF</span>
                                            </div>


  
                                   <input  class="btn btn-add" type="submit" name="save" value="Send Mail" />

                                     

                                            
                                        </div>



                            

                        


                           </form>

                        </div>


















                   <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="btn-group" id="buttonexport">
                                            <a href="#">
                                                <h4>Email History</h4>
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
                                                            <th>From</th> 
                                                           <th>To</th> 
                                                           <th>Subject</th>
                                                            <th>Message </th>
                                                           <th>Date</th>
                                                          
                                                            <th>Attachments</th>
                                                          
                                                             
                                                      
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                    <?php

                                                    include"../db.php";

                                                    /* code for data delete */
if(isset($_GET['del']))
{
    $SQL = $con->query("DELETE FROM emailentry WHERE id=".$_GET['del']);

}


/* code for data delete */
$result = mysqli_query($con,"SELECT * FROM emailentry order by id desc limit 5");

 $tmpCount = 1;


while($row = mysqli_fetch_array($result))
{

echo '  <tbody>
                                    <tr>


                                     


                                              ';?>  <td><?php echo $tmpCount++ ?></td> <?php echo '
                                           <td>'.$row['fromm'].'</td> 
                                            <td> '.$row['too'].'</td>
                                             <td>'.$row['subject'].'</td>
                                           <td>'.$row['message'].'</td>
                                           <td>'.$row['datee'].'</td>
                                           <td>'.$row['img'].'</td>   

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

