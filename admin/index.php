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
        
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-dashboard"></i>
               </div>
               <div class="header-title">
                  <h1>CRM Master Admin Dashboard</h1>
                  <small>Very detailed & featured admin.</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox1">
                        <div class="statistic-box">
                           <i class="fa fa-user-plus fa-3x"></i>
                           <div class="counter-number pull-right">


                              <?php
include"../db.php";

$result = mysqli_query($con,"select count(1) FROM adminlogin where typeofuser='admin'");
$row = mysqli_fetch_array($result);

$total = $row[0];

       echo'  

                              <span class="count-number">'. $total.'</span> 
      '
?>


                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>Admin Login</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox2">
                        <div class="statistic-box">
                           <i class="fa fa-user-secret fa-3x"></i>
                           <div class="counter-number pull-right">

                              <?php
include"../db.php";

$result = mysqli_query($con,"select count(1) FROM adminlogin where typeofuser='employee'");
$row = mysqli_fetch_array($result);

$total = $row[0];

       echo'  

      <span class="count-number">'. $total.'</span> '
?>
                            
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>  Employee Login</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                  
                  </div>
                 <a href="customer.php">   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox4">
                        <div class="statistic-box">
                           <i class="fa fa-files-o fa-3x"></i>
                           <div class="counter-number pull-right">

                                 <?php
include"../db.php";

$result = mysqli_query($con,"select count(1) FROM vc");
$row = mysqli_fetch_array($result);

$total = $row[0];

       echo'  
   <span class="count-number">'. $total.'</span> 
      '
?>


                           
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>No of Visiting Card</h3>
                        </div>
                     </div>
                  </div> </a>
               </div>
             
               <!-- /.row -->
              
            </section>
            <!-- /.content -->
         </div>
     

<?php 
include "footer.php";
?>




      </div>
    