<!DOCTYPE html>
<html lang="en">

      <?php 
include"allcss.php";    
?>

<!-- NOTES QUERY -->
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


<script>
$(function() {
    $("#skill_input").autocomplete({
        source: "notesquery.php",
    });
});
</script>
<!-- NOTES QUERY -->


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
                  <h1>Edit Notes</h1>
                  <small>Notes list</small>
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
                              
                           </div>
                        </div>
                        <div class="panel-body">





<?php
include "../db.php";

// EDIT 
if(isset($_GET['edit']))
{
$result = mysqli_query($con,"SELECT * FROM notes WHERE id=".$_GET['edit']);
$getROW = $result->fetch_array();
}


// UPDATE
if(isset($_POST['update']))
{
$result = mysqli_query($con,"UPDATE notes SET message='".$_POST['message']."',companyname='".$_POST['companyname']."'
 WHERE id=".$_GET['edit']);


  ?>
                <script>
                alert('Successfully Updated ...');
                window.location.href='notes.php';
                </script>
                <?php


}



?>
                     

 <form  action="" method="post" enctype="multipart/form-data" class="col-md-6 col-md-offset-3">
   
  
  <div class="form-group">
                                                            <label>Company Name </label>

      


         <input type="text" id="skill_input" name="companyname" value="<?php if(isset($_GET['edit'])) echo $getROW['companyname'];  ?>" class="form-control">



                                                         
                                                        </div>


                               <div class="form-group">
                                                            <label>Add Notes</label>

                                                     <textarea name="message" type="text" class="form-control" rows="5" cols="30">
                                                       <?php if(isset($_GET['edit'])) echo $getROW['message'];  ?>

                                                     </textarea>



                                                          
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

