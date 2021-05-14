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
                                    
                                        <div class="panel-body">









     <div class="buttonexport" id="buttonlist">
                                              

                                                   <input type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Search By Keywords " title="Type in a name">


                                            </div> 
                                            
                                            
                                            
                                            
                                            
      <script>
                        function myFunction() {
                            var input, filter, table, tr, td, i;
                            input = document.getElementById("myInput");
                            filter = input.value.toUpperCase();
                            table = document.getElementById("datatable");
                            tr = table.getElementsByTagName("tr");
                           

                           /* for (i = 0; i < tr.length; i++) {
                                td = tr[i].getElementsByTagName("td")[3];
                                if (td) {
                                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                        tr[i].style.display = "";
                                    } else {
                                        tr[i].style.display = "none";
                                    }
                                }
                            } */



                            for (i = 0; i < tr.length; i++) {

    td = tr[i].getElementsByTagName("td");

    if(td.length > 0){ // to avoid th

       if (td[0].innerHTML.toUpperCase().indexOf(filter) > -1 || td[1].innerHTML.toUpperCase().indexOf(filter) > -1 || td[2].innerHTML.toUpperCase().indexOf(filter) > -1 || td[3].innerHTML.toUpperCase().indexOf(filter) > -1 || td[4].innerHTML.toUpperCase().indexOf(filter) > -1 || td[5].innerHTML.toUpperCase().indexOf(filter) > -1 || td[6].innerHTML.toUpperCase().indexOf(filter) > -1 || td[7].innerHTML.toUpperCase().indexOf(filter) > -1 || td[8].innerHTML.toUpperCase().indexOf(filter) > -1 || td[9].innerHTML.toUpperCase().indexOf(filter) > -1 || td[10].innerHTML.toUpperCase().indexOf(filter) > -1 || td[11].innerHTML.toUpperCase().indexOf(filter) > -1 || td[12].innerHTML.toUpperCase().indexOf(filter) > -1) {
         tr[i].style.display = "";
       } else {
         tr[i].style.display = "none";
       }

    }
 }


                        }
                    </script>
                    











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
     
     
 <h5>Select Company Industries </h5>
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
  </div>



               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">


                        
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                               <div class="buttonexport" id="buttonlist">
                                                <a class="btn btn-add" href="customeradd.php"> <i class="fa fa-plus"></i> Add Contact's Data
                                                </a> 
                                                
                                                
                                                </div>

                           </div>
                        </div>
                    
                     </div>
                  </div>
               </div>
           
           
           
           
                                      
                    
                                            

  <div class="panel-body">
                       

                           <!-- ./Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">

  <table id="datatable" class="table table-bordered table-striped table-hover tabl">
    <thead>
        <th><!-- OWNER NO  for approval tht msg has gone to others SELECT ALL 
       <input  type="checkbox" class="chkbox" name="pageCheck" value="" onclick="checkPage(this)">
<!-- OWNER NO for approval tht msg has gone to others SELECT ALL-->
      <b> &nbsp;&nbsp;Sr. No</b> </th>
      <th>Customer Name</th> 
      <th>Mobile no 1</th>
      <th>City</th>
      <th>State</th>

      <th>Company Category</th>
      <th>Company Industries</th>
      <th>Company Products</th>
      <th>Company Exhibitions</th>
 

    <th>Email Id</th> 
    <th>Email Id 2</th>

      <th>Job Title</th>
      <th>Department</th>
       <th>Action</th>
    </thead>
    <tbody> 

      <?php
      $con = mysqli_connect('localhost','printnuk_soar','soarprint@123','printnuk_soarprint');

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>

<?php  


/* code for data delete */
if(isset($_GET['del']))

{    $SQL = $con->query("DELETE FROM vcadd WHERE vcid=".$_GET['del']);

    $SQL = $con->query("DELETE FROM vc WHERE id=".$_GET['del']);

}


$result = mysqli_query($con,"SELECT * FROM vc order by id desc "); 
 $tmpCount = 1;

while($row = mysqli_fetch_array($result))
{
echo '                              <tr> 

  ';?>
       <td>
 <?php echo '

                                          '; ?>
 
   <?php echo $tmpCount++ ?>

 </td>
  <?php echo '


             <td><a style="color:black" href="customeredit.php?edit='.$row['id'].'">' . $row['cname'] . '</a></td>
             <td> ' . $row['mobileno1'] . '</td> 
                       
                        <td>' . $row['city'] . '</td>
                        <td>' . $row['state'] . '</td>

                        <td>' . $row['companycategory'] . '</td>
                        <td>' . $row['companyindustries'] . '</td>
                        <td>' . $row['companyproducts'] . '</td>
                        <td>' . $row['companyexhibitions'] . '</td>

  <td  style="text-transform: lowercase;"> ' . $row['emailid1'] . '</td>
  <td style="text-transform: lowercase;"> '.$row['emailid2'].'</td>
             <td>' . $row['jobtitle'] . '</td> 
             <td>'.$row['department'].'</td>
           

             <td>
           <a href="customeredit.php?edit='.$row['id'].'">
 <button type="button" class="btn btn-add btn-sm"><i class="fa fa-pencil"></i></button>
</a>
   <a  class="delete" href="?del='.$row['id'].'"> <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button> </a>

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






</div></div></div></div>


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
