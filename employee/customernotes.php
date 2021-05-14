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
      
      <?php
include"../db.php";
$pr_id=$_GET['q'];
$result = mysqli_query($con,"SELECT * FROM vc WHERE id=$pr_id");
while($row = mysqli_fetch_array($result))
{

$companyname = $row['cname'];
//echo $companyname;
}
?>




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
                            <h1>Add Notes </h1>
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

           $message=$_POST['message'];
            $datee= date('d-m-y');
             $partneremail=$_POST['partneremail'];
          $companyname=$_POST['companyname'];

             $save=mysqli_query($con,"INSERT INTO notes (message, datee,partneremail, companyname) VALUES ('$message','$datee', '$partneremail', '$companyname')");

  ?>
                                <script>
                                    alert('Successfully Added Notes ...');
                                    window.location.href = 'customer.php';
                                </script>
                                <?php

    }
?>

                                                <form action="" method="post" enctype="multipart/form-data" class="col-md-6 col-md-offset-3">

                                                

  <input type="hidden" name="partneremail" value="<?php echo $_SESSION['user']['email']; ?>">



                                                        <div class="form-group">
                                                            <label>Company name </label>

                                                            <input type="text" name="companyname" class="form-control" value="<?php echo $companyname; ?>" />

                                                        </div>

                                                        <div class="form-group">
                                                            <label>Add Notes</label>

 <textarea type="text" name="message" id="value" class="form-control" 
 onkeyup="charcounts('value','countchar');" onkeydown="charcounts('value','countchar');"
 onmouseout="charcounts('value','countchar');"  rows="10" cols="30"></textarea>
                                                            <span class="help-block">Enter Message upto <span id="countchar">0</span> Characters</span>
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
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="btn-group" id="buttonexport">
                                            <a href="#">
                                                <h4>Notes History</h4>
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
                                                      <th>Company Name</th>
                                                        <th>Date</th>
                                                      
                                                        <th>Description</th>    <th>Email </th>
                                                      
<th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>

                                                <?php

                                                    include"../db.php";

                                                    /* code for data delete */
if(isset($_GET['del']))
{
    $SQL = $con->query("DELETE FROM notes WHERE id=".$_GET['del']);
 ?>
                                <script>
                                  //  alert('Successfully Added Notes ...');
                                    window.location.href = 'customer.php';
                                </script>
                                <?php
}

$sessionemail = $_SESSION['user']['email'];
/* code for data delete */
$result = mysqli_query($con,"SELECT * FROM notes where companyname='$companyname' and partneremail='$sessionemail'");

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
                                            <td> '.$row['companyname'].'</td>

  


  <td>'.$row['datee'].'</td>

  <td>'.$row['message'].'</td>
    <td>'.$row['partneremail'].'</td>

<td> <a href="notesedit.php?edit='.$row['id'].'">

                                          <button type="button" class="btn btn-add btn-sm"><i class="fa fa-pencil"></i></button>
</a></td>
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