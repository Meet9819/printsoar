<!DOCTYPE html>
<html lang="en">





      <?php 
include"allcss.php";    
?>    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
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
                  <h1>View Notes</h1>
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
                          
                        </div>
                        <div class="panel-body">



  


     <?php
include('../db.php');
if(isset($_POST['save']))
{

           $message=$_POST['message'];
            $datee= date('d-m-y');
             $partneremail=$_POST['partneremail'];
          $companyname=$_POST['companyname'];

             $save=mysqli_query($con,"INSERT INTO notes (message, datee,partneremail, companyname) VALUES ('$message','$datee', '$partneremail', '$companyname')");

  ?>
                                <script>
                                    alert('Successfully Added Notes ...');
                                    window.location.href = 'notes.php';
                                </script>
                                <?php

    }
?>
 <form  action="" method="post" enctype="multipart/form-data" class="col-md-6 col-md-offset-3">
   
  

   <input type="hidden" name="partneremail" value="<?php echo $_SESSION['user']['email']; ?>">



  <div class="form-group">
                                                            <label>Company Name </label>

       <input type="text" id="skill_input" name="companyname" value="" class="form-control">









                                                         
                                                        </div>


                                                  <div class="form-group">
                                                            <label>Add Notes</label>

                                                     <textarea name="message" type="text" class="form-control" rows="5" cols="30"></textarea>



                                                          
                                                        </div>


                        

                            <div class="col-md-12 text-center">
                                 <input class="btn btn-add" type="submit" name="save" value="Add Notes" />

                              </div>


                           </form>

                        </div>
                     </div>
                  </div>
               </div>



               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                         
                        </div>




                                    <div class="panel-body">
                                      


                                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->

                                        <div class="table-responsive">


                                             

                                            <table id="datatable" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr class="info">
                                                     
                                                        <th>Company Name</th>
                                                        <th>Date</th>
                                                      
                                                        <th>Description</th>    <th>Email </th>
                                                         <th>Edit</th>  <th>Delete</th>
                                                    </tr>
                                                </thead>

                                              
                                                    <?php

                                                    include"../db.php";

/* code for data delete */
if(isset($_GET['del']))
{
    $SQL = $con->query("DELETE FROM notes WHERE id=".$_GET['del']);

}

$sessionemail = $_SESSION['user']['email'];
$result = mysqli_query($con,"SELECT * FROM notes where  partneremail='$sessionemail' order by id desc");


while($row = mysqli_fetch_array($result))
{

echo '     <tbody>

                                    <tr>

                                     <td> '.$row['companyname'].'</td>

  


  <td>'.$row['datee'].'</td>

  <td>'.$row['message'].'</td>
    <td>'.$row['partneremail'].'</td>

                   
                                    
                                       <td>
                                     
  <a href="notesedit.php?edit='.$row['id'].'">

                                          <button type="button" class="btn btn-add btn-sm"><i class="fa fa-pencil"></i></button>
</a>

                               </td>     <td>       <a  class="delete" href="?del='.$row['id'].'"> <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button> </a>
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
                </div>
                







                <?php
include"footer.php";
 ?>

     