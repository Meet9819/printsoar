<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
       <title>Login Screen | Admin Module</title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- Pe-icon-7-stroke -->
        <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
        <!-- style css -->
        <link href="assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
    </head>
    <body>
        <!-- Content Wrapper -->


  <?php
session_start();
$conn=mysqli_connect('localhost','printnuk_soar','soarprint@123','printnuk_soarprint');
//$conn=mysqli_connect('localhost','root','','soarprint');
//Getting Input value
if(isset($_POST['login'])){
  $username=mysqli_real_escape_string($conn,$_POST['username']);
  $password=mysqli_real_escape_string($conn,$_POST['password']);
  if(empty($username)&&empty($password)){
  $error= 'Fileds are Mandatory';
  }else{
 //Checking Login Detail
 $result=mysqli_query($conn,"SELECT * FROM adminlogin WHERE username='$username' AND password='$password'");
 $row=mysqli_fetch_assoc($result);
 $count=mysqli_num_rows($result);
 if($count==1){
      $_SESSION['user']=array(
  'username'=>$row['username'],
   'password'=>$row['password'],
 'contact'=>$row['contact'],
     'email'=>$row['email'],

   'typeofuser'=>$row['typeofuser']
   );
   $typeofuser=$_SESSION['user']['typeofuser'];
   //Redirecting User Based on Role
    switch($typeofuser){
  case 'admin': 
      
      
         ?> 

            <script>

    window.location = 'admin/index.php';

</script> <?php

 
  break;
  case 'employee':
    ?> 

            <script>

    window.location = 'employee/index.php';

</script> <?php

  break;


 }
 }else{
 $error='Your PassWord or UserName is not Found';
 }
}
}
?>



        <div class="login-wrapper">
          
            <div class="container-center">
            <div class="login-area">
                <div class="panel panel-bd panel-custom">
                  

  
                   <div style="background-color: white;text-align: center;padding: 10px" class="view-header">
                            <span class="logo-lg">
                  <img style="width:340px" src="assets/dist/img/logo.jpeg" alt="">
               </span>
                        </div> 

                      <div class="panel-heading">

                      


                    <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>



                            <div class="header-title">
                                <h3>Login</h3>
                                <small><strong>Please enter your credentials to login.</strong></small>
                            </div>
                        </div>
                    </div>                     <div class="panel-body">

                       
                        <form action="" method="post" name="login" >
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                               
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                               
                            </div>
                            <div>
                                 <input  class="btn btn-add" name="login" type="submit" value="Login" />


                              
                            </div>
                        </form>
<?php if(isset($error)){ echo $error; }?>
                        </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <!-- jQuery -->
        <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>


</html>