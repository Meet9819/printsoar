<!DOCTYPE html>
<html lang="en">

      <?php 
include"allcss.php";    
?>
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
                  <h1>Add Employee</h1>
                  <small>Employee list</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="employee.php"> 
                              <i class="fa fa-list"></i>  Employee List </a>  
                           </div>
                        </div>
                        <div class="panel-body">



     <?php

     use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';




include('../db.php');
if(isset($_POST['save']))
{
   

          
           $username=$_POST['username'];
            $email=$_POST['email'];
             $password=$_POST['password'];
          $contact=$_POST['contact'];
            $typeofuser=$_POST['typeofuser'];
           
             $status=1;
                    

             $save=mysqli_query($con,"INSERT INTO adminlogin (username, email,password, contact, typeofuser,status) VALUES ('$username','$email', '$password', '$contact','$typeofuser','$status')");
   

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
    $mail->setFrom('admin@printsoar.com', 'Print Soar');
  
  $mail->addAddress($_POST['email']);     // Add a recipient
 
$body = ' '.$_POST['typeofuser'].' login url is http://printsoar.com/ <br> Your Username - <b>'.$_POST['username'].'</b> and Password <b>'.$_POST['password'].'</b> is  ';
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = ' '.$_POST['typeofuser'].' Login | Username and Password ';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    
    
      ?>
                <script>
                alert('Successfully Inserted and Mail is Gone..');
               window.location.href='employee.php';
                </script>
                <?php




                
 //   echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}





               
    }
?>


 <form  action="" method="post" enctype="multipart/form-data"  class="col-md-6 col-md-offset-3">
   
  


                               <div class="form-group">
                                 <label>Type of User</label>
                                 <select name="typeofuser" class="form-control">
                                      
                                       <option value="admin">Admin</option>
                                       <option value="employee">Employee</option>
                                 </select>
                              </div>

                              <div class="form-group">
                                 <label>Employee Username</label>
                                 <input type="text" name="username" class="form-control" placeholder="Enter Employee Username" required>
                              </div>
                              <div class="form-group">
                                 <label>Employee Email Id</label>
                                 <input type="email" name="email" class="form-control" placeholder="Enter the Email Id of Employee" required>
                              </div>
                              <div class="form-group">
                                 <label>Password</label>
                                 <input type="text" name="password" class="form-control" placeholder="Enter the Password" required>
                              </div>
                              <div class="form-group">
                                 <label>Employee Contact</label>
                                 <input type="number" name="contact" class="form-control" placeholder="Enter the Employee Contact No" required>
                              </div>



  <div class="col-md-12 text-center">
                                 <input class="btn btn-add" type="submit" name="save" value="Save" />

                              </div>


                          
                           </form>

                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
        


       <?php 
include "footer.php";
?>

