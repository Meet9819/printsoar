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
                                            <a href="#">
                                                <h4>View Contact's</h4>
                                            </a>


                                        </div>
                                    </div>
                                    <div class="panel-body">
                                       
                                        <div class="col-md-6">


                                                <input type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Search By Email " title="Type in a name">


                                                </div>



                                               <div class="col-md-6 text-right">


                                                <div class="buttonexport" id="buttonlist">
                                                <a class="btn btn-add" href="customeradd.php"> <i class="fa fa-plus"></i> Add Contact's Data
                                                </a>
                                                </div>


                                                </div>

                               <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                                        <div class="btn-group ">
                                           

                                         

                                            <!--  <button class="btn btn-exp btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Table Data</button>
                              <ul class="dropdown-menu exp-drop" role="menu">

                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'excel',escape:'false'});"> 
                                    <img src="../assets/dist/img/xls.png" width="24" alt="logo"> XLS</a>
                                 </li>

                              </ul> -->
                                        </div> 



                                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->

                                        <div class="table-responsive">


                                             

                                            <table id="datatable" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr class="info">
                                                       
                                                        <th>Serial No</th>
                                                                <th>Company Name</th>
                                                                <th>Name</th>
                                                                <th>Job / Title</th>
                                                                <th>Mobile No</th>
                                                                <th>Email Id</th>
                                                                <th>Pincode</th>
                                                                <th>City</th>
                                                                <th>State</th>
                                                                <th>Country</th>
                                                     
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                             
                                                    <?php

                                                    include"../db.php";
/* code for data delete */
if(isset($_GET['del']))
{
    $SQL = $con->query("DELETE FROM vc WHERE id=".$_GET['del']);

   
}
/* code for data delete */
$result = mysqli_query($con,"SELECT * FROM vc order by id desc");

 $tmpCount = 1;


while($row = mysqli_fetch_array($result))
{

echo '  

    <tbody>

                                    <tr>

                                         ';?>
                                                    <td>
                                                        <?php echo $tmpCount++ ?>
                                                    </td>
                                                    <?php echo '

                                        <td>   <a style="color:black" href="customeredit.php?edit='.$row['id'].'">' . $row['cname'] . '</a></td>
   <td>' . $row['contactperson'] . '</td>
  <td>' . $row['jobtitle'] . '</td>
  <td> ' . $row['mobileno1'] . '</td>
   <td> ' . $row['emailid1'] . '</td>

  <td> ' . $row['pincode'] . '</td>
 <td> ' . $row['city'] . ' </td>
 <td> ' . $row['state'] . ' </td>
  <td> ' . $row['country'] . ' </td>








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

                        <!-- /.modal -->
                    </section>
                    <!-- /.content -->
                </div>

      <script>
                        function myFunction() {
                            var input, filter, table, tr, td, i;
                            input = document.getElementById("myInput");
                            filter = input.value.toUpperCase();
                            table = document.getElementById("datatable");
                            tr = table.getElementsByTagName("tr");
                            for (i = 0; i < tr.length; i++) {
                                td = tr[i].getElementsByTagName("td")[5];
                                if (td) {
                                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                        tr[i].style.display = "";
                                    } else {
                                        tr[i].style.display = "none";
                                    }
                                }
                            }
                        }
                    </script>
                <?php 
include "footer.php";
?>