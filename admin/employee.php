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
                            <h1>Employee</h1>
                            <small>Employee List</small>
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
                                                <h4>View Employee</h4>
                                            </a>


                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                                        <div class="btn-group">
                                            <div class="buttonexport" id="buttonlist">
                                                <a class="btn btn-add" href="employeeadd.php"> <i class="fa fa-plus"></i> Add Employee
                                                </a>

                                                

                                            </div>


                                           <div class="buttonexport" id="buttonlist">
                                              

                                                   <input type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Search By Email " title="Type in a name">


                                            </div>

                                         
                                        </div> 


   <div class="table-responsive">



<?php 


$db= new mysqli('localhost','printnuk_soar','soarprint@123','printnuk_soarprint');

//$db= new mysqli('localhost','root','','soarprint'); 
 ?>






                                            <table id="datatable" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr class="info">
                                                        <th>Sr.No</th>
                                                        <th>Username</th>
                                                        <th>Email</th>
                                                        <th>Password</th>
                                                        <th>Contact </th>
                                                        <th>Type of User</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                            


                                               <tbody>



                                                  <?php

                                                    include"../db.php";
/* code for data delete */
if(isset($_GET['del']))
{
    $SQL = $con->query("DELETE FROM adminlogin WHERE id=".$_GET['del']);

}

?>


                                   <?php $sql=$db->query("Select * from adminlogin");
 $tmpCount = 1;
            foreach ($sql as $key => $user) :

              

              ?>
        <tr>
 <td>  <?php echo $tmpCount++ ?> </td>
           
            <td><?php echo $user['username']; ?></td>
            <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['password']; ?></td>
                    <td><?php echo $user['contact']; ?></td>
                          <td><?php echo $user['typeofuser']; ?></td>



            <td><span data="<?php echo $user['id'];?>" class="status_checks btn <?php echo ($user['status'])? 'btn-add' : 'btn-danger'?>"><?php echo ($user['status'])? 'Active' : 'Inactive'?></span></td>






    <td>
      <?php echo '
  <a href="employeeedit.php?edit='.$user['id'].'">
   <button type="button" class="btn btn-add btn-sm"><i class="fa fa-pencil"></i></button>
  </a>

  <a  class="delete" href="?del='.$user['id'].'"> 
  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
   </a>
       
        </td> 

'; ?>











        </tr>
       <?php endforeach; ?>

                                        </tbody>








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





<!-- ACTIVE AND INACTIVE KA CODE -->

<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
$(document).on('click','.status_checks',function(){
var status = ($(this).hasClass("btn-add")) ? '0' : '1';
var msg = (status=='0')? 'Deactivate' : 'Activate';
if(confirm("Are you sure to "+ msg)){
  var current_element = $(this);
  url = "ajax.php";
  $.ajax({
  type:"POST",
  url: url,
  data: {id:$(current_element).attr('data'),status:status},
  success: function(data)
    {   
      location.reload();
    }
  });
  }      
});
</script>

     <!-- ACTIVE AND INACTIVE KA CODE -->       


 <!-- SEARCH KA CODE -->       

      <script>
                        function myFunction() {
                            var input, filter, table, tr, td, i;
                            input = document.getElementById("myInput");
                            filter = input.value.toUpperCase();
                            table = document.getElementById("datatable");
                            tr = table.getElementsByTagName("tr");
                            for (i = 0; i < tr.length; i++) {
                                td = tr[i].getElementsByTagName("td")[2];
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
                     <!-- SEARCH KA CODE -->   
                <?php 
include "footer.php";
?>