
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
            <!--
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

-->

            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.4/css/buttons.bootstrap.min.css">

            <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
            <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.4/js/dataTables.buttons.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.html5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.print.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.colVis.min.js"></script>
<script>
        $( document ).ready(function() {
$('#tableMain').on('click', 'tr.breakrow',function(){
    $(this).find('span').text(function(_, value){return value=='-'?'+':'-'});
                $(this).nextUntil('tr.breakrow').slideToggle(200);
            });
        });
    </script>
            <script type="text/javascript">
                $(document).ready(function() {
                    var table = $('#example').DataTable({
                        lengthChange: false,
                        buttons: ['copy', 'excel', 'pdf', 'colvis']
                    });

                    table.buttons().container()
                        .appendTo('#example_wrapper .col-sm-6:eq(0)');
                });
            </script>


            </head>

            <body class="hold-transition sidebar-mini">

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
                                <i class="fa fa-money"></i>
                            </div>
                            <div class="header-title">
                                <h1>View Customer's </h1>
                                <small>Export Details</small>
                            </div>

                        </section>

                        <section class="content">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-bd lobidrag">
                                        <div class="panel-heading">
                                            <div class="btn-group" id="buttonexport">
                                                <a href="#">
                                                    <h4>Export Details</h4>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="panel-body">

                                            <div class="table-responsive">
<div class="" id="container">
        <table  id="tableMain" class="table table-bordered table-striped table-hover" style="width:100%">
            <thead>
                <tr class="tableheader">
                    <th></th>
                                                            <th>Serial No</th>
                                                            <th>Company Name</th>
                                                            <th>Name</th>
                                                            <th>Job / Title</th>
                                                            <th>Dept</th>
                                                            <th>Mobile No</th> <th>Mobile No 2</th>
                                                            <th>Email Id</th>  <th>Email Id 2</th>
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

                </tr>
            </thead>
<tbody>
<?php

                                                    include"../db.php";

/* code for data delete */
$result = mysqli_query($con,"SELECT * FROM vc order by id desc");

 $tmpCount = 1;
 $tmpChild=1;
$html="";
$child= array();


 $tmpCount = 1;


while($row = mysqli_fetch_array($result))
{

$sql_query_child="SELECT * FROM vcadd WHERE vcid=".$row["id"];
      $result_select_child=mysqli_query($con,$sql_query_child);
 // $rowcount = mysqli_num_rows($result_select_child);?>
           

                <tr class="breakrow">
   <td align="center" valign="bottom" class="plusminus" style="margin-bottom: 250px;">    <strong><span style="font-size:24px;">+</span></strong></td>

   <td>  <?php echo  $tmpCount++; ?></td>
<td><?php echo $row["cname"]; ?></td>
<td><?php echo $row['contactperson']; ?></td>
<td><?php echo $row['jobtitle']; ?></td>
   <td><?php echo $row["department"]; ?></td>
<td><?php echo $row['mobileno1']; ?></td>
<td><?php echo $row['mobileno2']; ?></td>
<td><?php echo $row["emailid1"]; ?></td>
<td><?php echo $row['emailid2']; ?></td>

<td><?php echo $row['addressline1'].' '.$row['addressline2'].','.$row['suburb'].','.$row['city'].'- '.$row['pincode'].', '.$row['state'].','.$row['country'];?></td>


  <td><?php echo $row["companycategory"]; ?></td>
<td><?php echo $row['companyindustries']; ?></td>
<td><?php echo $row['companyproducts']; ?></td>
<td><?php echo $row["companyexhibitions"]; ?></td>
<td><?php echo $row['website']; ?></td>

  <td><?php echo $row["fax"]; ?></td>
<td><?php echo $row['landline']; ?></td>
<td><?php echo $row['landlineno1']; ?></td>
<td><?php echo $row["landlineno2"]; ?></td>
<td><?php echo $row['panno']; ?></td>


  <td><?php echo $row["gstno"]; ?></td>
</tr>
<?php if ($row_child=mysqli_query($con,$sql_query_child))
    {

      while($row_child = mysqli_fetch_array($result_select_child))
       {
?>
 <tr class="datarow" style="display:none;">

    <td></td>
        <td></td>                                    <td><b><?php echo $row_child["contactpersonn"];?></b></td>


                                              <td><b><?php echo $row_child["departmentt"]; ?></b></td>
<td><b><?php echo $row_child['jobtitlee']; ?></b></td>
<td><b><?php echo $row_child['mobile11']; ?></b></td>
<td><b><?php echo $row_child["mobile22"]; ?></b></td>

<td><b><?php echo $row_child['emailid11']; ?></b></td>


<td><b><?php echo $row_child['emailid22']; ?></b></td>
                                         </tr>
       	
      <?php }

    }
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