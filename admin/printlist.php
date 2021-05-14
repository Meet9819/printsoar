<?php
error_reporting(0);
?>
   <?php
session_start();
//Checking User Logged or Not
if (empty($_SESSION['user'])) {
    header('location:index.php');
}

?>

        <!DOCTYPE html>
        <html lang="en">

        <?php
include "allcss.php";
?>
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
                        buttons: ['copy', 'excel','colvis']
                    });

                    table.buttons().container()
                        .appendTo('#example_wrapper .col-sm-6:eq(0)');
                });
            </script>
    
    <!-- EXCEL CODE -->
    
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
                                                    <?php
echo $_SESSION['user']['email'];
?>
                                               </a>

                                                <a href="profile.html">
                                                    <i class="fa fa-user"></i>
                                                    <?php
echo $_SESSION['user']['typeofuser'];
?>
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
                                <h1>Customer's Data</h1>
                                <small>Print Data</small>
                            </div>

                        </section>

                        <section class="content">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-bd lobidrag">
                                        <div class="panel-heading">
                                            <div class="btn-group" id="buttonexport">
                                                <a href="#">
                                                    <h4>Print Data</h4>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="panel-body">

















    <script src='search/jquery.js'></script>
    <script src='search/multifilter.js'></script>
 
  <script type='text/javascript'>
    //<![CDATA[
      $(document).ready(function() {
        $('.filter').multifilter()
      })
    //]]>
  </script>
 







<!-- DROPDOWN WITH SEARCH -->

<link rel="stylesheet" href="drop/style.css">
<script  src="drop/script.js"></script>

<!-- DROPDOWN WITH SEARCH -->


<div class='container-fluid'>

 
  <div class='filter-container col-md-6 '>   <h5>Select State </h5>
     <select autocomplete='off' name='State' placeholder='State' data-col='State' class="form-control selectpicker filter"  data-live-search="true"  >
                         <option value="">Select State</option> 
                                   <?php

include"../db.php";

$result = mysqli_query($con,"SELECT DISTINCT state FROM vc ");
while($row = mysqli_fetch_array($result))
{
echo '<option  value="'.$row['state'].'">' .$row['state'].'</option>';
} 
?>
       </select>
    </div>




  <div class='filter-container col-md-6 '>
      <h5>Select City </h5>
       <select  autocomplete='off' class="form-control selectpicker filter"  data-live-search="true"  name='City' placeholder='City' data-col='City'>
                                  <option value="">Select City</option>
                                   <?php

include"../db.php";

$result = mysqli_query($con,"SELECT DISTINCT city FROM vc ");
while($row = mysqli_fetch_array($result))
{
echo '<option  value="'.$row['city'].'">' .$row['city'].'</option>';
} 
?>

                            </select> 



    </div>
<Br><br>
      <div class='filter-container col-md-6'>
     
 <h5>Select Company Category </h5>

        <select  autocomplete='off'  class="form-control selectpicker filter"  data-live-search="true" name='Company Category' placeholder='Company Category' data-col='Company Category'>
                                  <option value="">Select Company Category</option>
                                   <?php

include"../db.php";

$result = mysqli_query($con,"SELECT DISTINCT companycategory FROM vc ");
while($row = mysqli_fetch_array($result))
{
echo '<option value="'.$row['companycategory'].'">' .$row['companycategory'].'</option>';
} 
?>

                            </select> 



    </div>

    <div class='filter-container col-md-6'>
     
     
 <h5>Select Company Category </h5>
          <select  autocomplete='off'  class="form-control selectpicker filter"  data-live-search="true"  name='Company Industries' placeholder='Company Industries' data-col='Company Industries'>
                                  <option value="">Select Company Industries</option>
                                   <?php

include"../db.php";

$result = mysqli_query($con,"SELECT DISTINCT companyindustries FROM vc ");
while($row = mysqli_fetch_array($result))
{
echo '<option value="'.$row['companyindustries'].'">' .$row['companyindustries'].'</option>';
} 
?>

                            </select>  



    </div>
   


     <div class='filter-container col-md-6'>
     
     
 <h5>Select Company Products </h5>
       <select autocomplete='off'  class="form-control selectpicker filter"  data-live-search="true"  name='Company Products' placeholder='Company Products' data-col='Company Products'>
                                  <option value="">Select Company Products</option>
                                   <?php

include"../db.php";

$result = mysqli_query($con,"SELECT DISTINCT companyproducts FROM vc ");
while($row = mysqli_fetch_array($result))
{
echo '<option value="'.$row['companyproducts'].'">' .$row['companyproducts'].'</option>';
} 
?>

                            </select>  




    </div>
    
    <div class='filter-container col-md-6 '>
         
 <h5>Select Company Exhibitions </h5>

          <select autocomplete='off'  class="form-control selectpicker filter"  data-live-search="true"  name='Company Exhibitions' placeholder='Company Exhibitions' data-col='Company Exhibitions' >
                                  <option value="">Select Company Exhibitions</option>
                                   <?php

include"../db.php";

$result = mysqli_query($con,"SELECT DISTINCT companyexhibitions FROM vc ");
while($row = mysqli_fetch_array($result))
{
echo '<option value="'.$row['companyexhibitions'].'">' .$row['companyexhibitions'].'</option>';
} 
?>

                            </select>  

    </div>
   
<Br><br>

    <div class='clearfix'></div>
  </div> <Br><br>


                                            <div class="table-responsive">

                                             


<!-- CHECKBOX CODE -->
                                                <script type="text/javascript">
                                                    function checkAll(checkname, bx) {
                                                        for (i = checkname.length; i--;)
                                                            checkname[i].checked = bx.checked;
                                                    }

                                                    function checkPage(bx) {
                                                        for (var tbls = document.getElementsByTagName("table"), i = tbls.length; i--;)
                                                            for (var bxs = tbls[i].getElementsByTagName("input"), j = bxs.length; j--;)
                                                                if (bxs[j].type == "checkbox")
                                                                    bxs[j].checked = bx.checked;
                                                    }
                                                </script>

                                                <!-- ./Plugin content:powerpoint,txt,pdf,png,word,xl -->
                                                
<!-- CHECKBOX CODE -->




                                                <form method="post" enctype="multipart/form-data" action="print.php">


    <div class="col-md-12 text-center">
                                                        <input class="btn btn-add" type="submit" name="update" value="Print Data" />

                                                    </div>
                                                    <br><br>
                                                    <table id="example" class="table table-bordered table-striped table-hover tabl" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th> 
<!-- OWNER NO  for approval tht msg has gone to others SELECT ALL -->
                                                                
<!-- OWNER NO for approval tht msg has gone to others SELECT ALL--> 
Serial No</th>
                                                                <th>Company Name</th>
                                                                <th>Name</th>
                                                                <th>Job / Title</th>
                                                                <th>Mobile No</th>
                                                                <th>Email Id</th>
                                                                <th>Pincode</th>
                                                                <th>City</th>
                                                                <th>State</th>
                                                                <th>Country</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php

include "../db.php";

/* code for data delete */
$result = mysqli_query($con, "SELECT * FROM vc order by id desc");

$tmpCount = 1;

while ($row = mysqli_fetch_array($result)) {
    
    echo '  

                                    <tr>

                                         ';
?>
 <td>
                                                                    <?php
    echo '   <input id="email" type="checkbox" name="email[]"  

    value="' . $row['contactperson'] .'&nbsp; - &nbsp'. $row['mobileno1'] . '<br> M/s ' . $row['cname'] . '<br>' . $row['addressline1'] .'&nbsp;'. $row['addressline2'] .'&nbsp;'. $row['suburb'] .'&nbsp;'. $row['city'] . '-'. $row['pincode'] . '&nbsp;'. $row['state'] .'&nbsp;'. $row['country'] .  '<br>'. $row['mobileno2'] .  '&nbsp;'. $row['landline'] .  '"  /> 

           ';
?>
                                                                       <?php
    echo $tmpCount++;
?>
                                                               </td>
                                                                <?php
    echo '

                                      <td><a style="color:black" href="customeredit.php?edit='.$row['id'].'"> ' . $row['cname'] . '</a></td>
   <td>' . $row['contactperson'] . '</td>
  <td>' . $row['jobtitle'] . '</td>
  <td> ' . $row['mobileno1'] . '</td>
   <td> ' . $row['emailid1'] . '</td>

  <td> ' . $row['pincode'] . '</td>
 <td> ' . $row['city'] . ' </td>
 <td> ' . $row['state'] . ' </td>
  <td> ' . $row['country'] . ' </td>

                                    </tr>

';
}
?>
                                                        </tbody>

                                                    </table>

                                                
                                                </form>
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