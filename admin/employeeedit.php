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
include "../db.php";

// EDIT 
if(isset($_GET['edit']))
{
$result = mysqli_query($con,"SELECT * FROM adminlogin WHERE id=".$_GET['edit']);
$getROW = $result->fetch_array();
}


// UPDATE
if(isset($_POST['update']))
{
$result = mysqli_query($con,"UPDATE adminlogin SET username='".$_POST['username']."',email='".$_POST['email']."',password='".$_POST['password']."',contact='".$_POST['contact']."',typeofuser='".$_POST['typeofuser']."'
 WHERE id=".$_GET['edit']);



               ?>
                <script>
                alert('Successfully Updated..');
               window.location.href='employee.php';
                </script>
                <?php

}



?>

                     

 <form  action="" method="post" enctype="multipart/form-data"  class="col-md-6 col-md-offset-3">
   
  


                               <div class="form-group">
                                 <label>Type of User</label>
                                 <select name="typeofuser" class="form-control">
                                       <option value=<?php if(isset($_GET['edit'])) echo $getROW['typeofuser'];  ?>><?php if(isset($_GET['edit'])) echo $getROW['typeofuser'];  ?></option>
 
                                       <option value="admin">Admin</option>
                                       <option value="employee">Employee</option>
                                 </select>
                              </div>

                              <div class="form-group">
                                 <label>Employee Username</label>
                                 <input type="text" name="username" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['username'];  ?>" placeholder="Enter Employee Username" required>
                              </div>
                              <div class="form-group">
                                 <label>Employee Email Id</label>
                                 <input type="email" name="email" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['email'];  ?>"  placeholder="Enter the Email Id of Employee" required>
                              </div>
                              <div class="form-group">
                                 <label>Password</label>
                                 <input type="text" name="password" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['password'];  ?>"  placeholder="Enter the Password" required>
                              </div>
                              <div class="form-group">
                                 <label>Employee Contact</label>
                                 <input type="number" name="contact" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['contact'];  ?>"  placeholder="Enter the Employee Contact No" required>
                              </div>


                              <div class="reset-button">
                               

                                     <input class="btn btn-success" type="submit" name="update" value="Update" />

                              
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

