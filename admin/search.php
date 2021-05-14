<!DOCTYPE html>
<html lang="en">
   

      <?php 
include"allcss.php";    
?>


   <body class="hold-transition sidebar-mini">
     
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
                 
                  <div class="col-xs-12">
                  









    <script src='search/jquery.js'></script>
    <script src='search/multifilter.js'></script>
 
    <link href='search/style.css' media='screen' rel='stylesheet' type='text/css' />

  <script type='text/javascript'>
    //<![CDATA[
      $(document).ready(function() {
        $('.filter').multifilter()
      })
    //]]>
  </script>
 




<div class='container'>
  <div class='filters'>
 


    <div class='filter-container'>
      <input autocomplete='off' class='filter form-control' name='State' placeholder='State' data-col='State'/>
    </div>

  <div class='filter-container'>
      <input autocomplete='off' class='filter form-control' name='City' placeholder='City' data-col='City'/>
    </div>
<Br><br>
      <div class='filter-container'>
      <input autocomplete='off' class='filter form-control' name='Company Category' placeholder='Company Category' data-col='Company Category'/>
    </div>

    <div class='filter-container'>
      <input autocomplete='off' class='filter form-control' name='Company Industries' placeholder='Company Industries' data-col='Company Industries'/>
    </div>
   


     <div class='filter-container'>
      <input autocomplete='off' class='filter form-control' name='Company Products' placeholder='Company Products' data-col='Company Products'/>
    </div>
    
    <div class='filter-container'>
      <input autocomplete='off' class='filter form-control' name='Company Exhibitions' placeholder='Company Exhibitions' data-col='Company Exhibitions'/>
    </div>
   


    <div class='clearfix'></div>
  </div>
</div>



<div class='container'>
  <table  class="table table-bordered table-striped table-hover">
    <thead>
      <th>Customer Name</th> 
      <th>Mobile no 1</th>
      <th>City</th>
      <th>State</th>

      <th>Company Category</th>
      <th>Company Industries</th>
      <th>Company Products</th>
      <th>Company Exhibitions</th>

      <th>Job Title</th>
      <th>Department</th>
      
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

$result = mysqli_query($con,"SELECT * FROM vc order by id desc");
while($row = mysqli_fetch_array($result))
{
echo '                              <tr>

             <td>' . $row['cname'] . '</td>
             <td> ' . $row['mobileno1'] . '</td> 
                       
                        <td>' . $row['city'] . '</td>
                        <td>' . $row['state'] . '</td>

                        <td>' . $row['companycategory'] . '</td>
                        <td>' . $row['companyindustries'] . '</td>
                        <td>' . $row['companyproducts'] . '</td>
                        <td>' . $row['companyexhibitions'] . '</td>


             <td>' . $row['jobtitle'] . '</td> 
             <td>'.$row['department'].'</td>
           

                                      </tr>

';
}
?>

    
    </tbody>
  </table>
</div>






                  </div>
               
               </div>
             
               <!-- /.row -->
              
            </section>
            <!-- /.content -->
         </div>
     





      </div>
     









