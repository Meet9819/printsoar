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
                  <h1>Edit Category</h1>
                  <small>Category list</small>
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
                              <i class="fa fa-list"></i>  Category List </a>  
                           </div>
                        </div>
                        <div class="panel-body">





<?php
include "../db.php";

// EDIT 
if(isset($_GET['edit']))
{
$result = mysqli_query($con,"SELECT * FROM category WHERE id=".$_GET['edit']);
$getROW = $result->fetch_array();
}


// UPDATE
if(isset($_POST['update']))
{
$result = mysqli_query($con,"UPDATE category SET catname='".$_POST['catname']."',type='".$_POST['type']."'
 WHERE id=".$_GET['edit']);


  ?>
                <script>
                alert('Successfully Updated ...');
                window.location.href='category.php';
                </script>
                <?php


}



?>
                     

 <form  action="" method="post" enctype="multipart/form-data" class="col-md-6 col-md-offset-3">
   
  


                               <div class="form-group">
                                 <label>Type of User</label>
                                

     <select name="type" class="form-control" > 
 <option value="<?php if(isset($_GET['edit'])) echo $getROW['type'];  ?>"><?php if(isset($_GET['edit'])) echo $getROW['type'];  ?></option>

   <option value="category">Category</option>
  <option value="industries">Industries</option> 
  <option value="products">Products</option>
  <option value="exhibitions">Exhibitions</option>
 
</select>
                              </div>

                              <div class="form-group">
                                 <label>Category</label>
                                 <input type="text" name="catname" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['catname'];  ?>" placeholder="Enter Category" required>
                              </div>
                            
    <div class="col-md-12 text-center">
                                 <input class="btn btn-add" type="submit" name="update" value="Update" />

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

