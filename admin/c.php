<?php error_reporting(0); ?>
    <?php
session_start();
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:index.php');
}

?>


<!DOCTYPE html>
<html lang="en">


        <?php 
include"allcss.php";    
?>
          


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



            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.4/css/buttons.bootstrap.min.css">

            <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
            <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.4/js/dataTables.buttons.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.html5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.print.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.colVis.min.js"></script>
 


    <!-- EXCEL CODE -->
    
            <script type="text/javascript">
                $(document).ready(function() {
                    var table = $('#example').DataTable({
                        lengthChange: false,
                        buttons: []
                    });

                    table.buttons().container()
                        .appendTo('#example_wrapper .col-sm-6:eq(0)');
                });
            </script>
    
    <!-- EXCEL CODE -->



   <body class="hold-transition sidebar-mini">

      <!-- Site wrapper -->
      <div class="wrapper">
        

            <header class="main-header">
                         <a style="background-color: white" href="index.php" class="logo">
            <!-- Logo -->
            <span class="logo-mini">
                  <img src="../assets/dist/img/mini-logo.png" alt="">
               </span>
            <span class="logo-lg">
                  <img src="../assets/dist/img/logo.jpeg" alt="">
               </span>
        </a>
                        <!-- Header Navbar -->
                        <nav class="navbar navbar-static-top">
                            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                                <!-- Sidebar toggle button-->
                                <span class="sr-only">Toggle navigation</span>
                                <span class="pe-7s-angle-left-circle"></span>
                            </a>

                            <div class="navbar-custom-menu">
                                <ul class="nav navbar-nav">

                                    <!-- user -->
                                    <li class="dropdown dropdown-user">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <img src="../assets/dist/img/avatar5.png" class="img-circle" width="45" height="45" alt="user"></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="profile.html">
                                                    <i class="fa fa-user"></i>
                                                    <?php echo $_SESSION['user']['email'];?>
                                                </a>

                                                <a href="profile.html">
                                                    <i class="fa fa-user"></i>
                                                    <?php echo $_SESSION['user']['typeofuser'];?>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="logout.php">
                                                    <i class="fa fa-sign-out"></i> Signout</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </header>

                            
         <?php 
include"menu.php";    
?>



         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-ticket"></i>
               </div>
               <div class="header-title">
                   <h1>Contact's</h1>
                            <small>Contact's List</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
              
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">


                        
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                               <div class="buttonexport" id="buttonlist">
                                                <a class="btn btn-add" href="customeradd.php"> <i class="fa fa-plus"></i> Add Contact's Data
                                                </a> 
                                                
                                                 <a class="btn btn-add" href="export.php"> <i class="fa fa-plus"></i> Export Data
                                                </a>
                                                </div>

                           </div>
                        </div>
                        <div class="panel-body">
                       

                           <!-- ./Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">































                                                    <table id="example" class="table table-bordered table-striped table-hover" style="width:100%">
                                                        <thead>
                                                            <tr>
   <th>Serial No</th>
                                                                <th>Company Name</th>
                                                                <th>Name</th>
                                                                <th>Job / Title</th> 
                                                                 <th>Dept</th>
                                                                <th>Mobile No</th> 
                                                                <th>Mobile No 2</th>
                                                                <th>Email Id</th> 
                                                                 <th>Email Id 2</th>
                                                                 <th>Address</th>
                                                                 <th>Co. Category</th>
                                                                <th>Co. Industries</th>
                                                                <th>Co. Products</th>
                                                                <th>Co. Exhibition</th>
                                                                <th>Website</th>
                                                                <th>Fax</th>
                                                                <th>Landline </th>
                                                                <th>Landline No 1</th>
                                                                <th>Landline No 2</th>
                                                                <th>PAN No</th>
                                                                <th>GST No</th>




                                                                 <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody> 
                                                        
                                                        
                                                            <?php

                                                    include"../db.php";
/* code for data delete */
if(isset($_GET['del']))
{
    $SQL = $con->query("DELETE FROM vc WHERE id=".$_GET['del']);

}

?>

                                                            <?php

                                                    include"../db.php";

/* code for data delete */
$result = mysqli_query($con,"SELECT * FROM vc order by id desc");

 $tmpCount = 1;

while($row = mysqli_fetch_array($result))
{

echo '  

                                    <tr>

                                         ';?>
       <td>
 
   <?php echo $tmpCount++ ?>

 </td>
  <?php echo '
    
     <td> <a style="color:black" href="customeredit.php?edit='.$row['id'].'">' . $row['cname'] . '</a></td>
<td>' . $row['contactperson'] . '</td>
  <td>' . $row['jobtitle'] . '</td> 
    <td>'.$row['department'].'</td>
  <td> ' . $row['mobileno1'] . '</td> <td> '.$row['mobileno2'].'</td>
   <td> ' . $row['emailid1'] . '</td> <td> '.$row['emailid2'].'</td>
   <td>'.$row['addressline1'].' '.$row['addressline2'].','.$row['suburb'].','.$row['city'].'- '.$row['pincode'].', '.$row['state'].','.$row['country'].'</td>
  <td> '.$row['companycategory'].'</td>
 <td> '.$row['companyindustries'].' </td>
 <td> '.$row['companyproducts'].' </td>
  <td> '.$row['companyexhibitions'].' </td>
 <td> '.$row['website'].' </td>
  <td> '.$row['fax'].' </td>
 <td> '.$row['landline'].' </td>
 <td> '.$row['landlineno1'].' </td>
  <td> '.$row['landlineno2'].' </td>
 <td> '.$row['panno'].' </td>
  <td> '.$row['gstno'].' </td>




    <td>
           <a href="customeredit.php?edit='.$row['id'].'">
 <button type="button" class="btn btn-add btn-sm"><i class="fa fa-pencil"></i></button>
</a>
   <a  class="delete" href="?del='.$row['id'].'"> <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> </button> </a>

     <a href="customernotes.php?q='.$row['id'].'">

<button style="background-color:black;border: 1px solid black;" type="button" class="btn btn-add btn-sm"><i class="fa fa-edit"></i></button>
</a>
                                     

                                       </td>       



                                    </tr>

';
}
?>
                                                                   
                                                        </tbody>

                                                    </table>



















                           </div>
                        </div>
                     </div>
                  </div>
               </div>
           

            </section>
            <!-- /.content -->
         </div>
          <footer class="main-footer">
                            <strong>Copyright &copy; 2019, All rights reserved.
         </footer>

      <!-- jquery-ui --> 
      <!-- Bootstrap -->
       <script src="../assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

      <script src="../assets/dist/js/custom.js" type="text/javascript"></script>

     <script src="../assets/dist/js/dashboard.js" type="text/javascript"></script>

</body>

</html>
