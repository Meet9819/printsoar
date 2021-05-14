<?php
 error_reporting(0);
session_start();
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:index.php');
}

?>



    <!DOCTYPE html>
    <html lang="en">



<!-- SUBURB QUERY -->
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


<script>
$(function() {
    $("#skill_input").autocomplete({
        source: "customersuburbquery.php",
    });
});
</script>
<!-- SUBURB QUERY -->

 


<!-- PINCODE k search ka code -->
      <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<!-- PINCODE k search ka code -->





<!-- AJAX INSERT UPDATE DELETE -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- AJAX INSERT UPDATE DELETE -->




    <link href="../assets/plugins/modals/component.css" rel="stylesheet" type="text/css" />

    <!-- PINCODE k search ka code -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <!-- PINCODE k search ka code -->

    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <script type="text/javascript" src="searchdropdown/mock.js"></script>
    <link rel="stylesheet" type="text/css" href="searchdropdown/jquery.dropdown.css">
    <script src="searchdropdown/jquery.dropdown.js"></script>







    <!-- ADD ROW -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- ADD ROW -->


     <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="https://bootswatch.com/superhero/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>


  <script type="text/javascript" src="searchdropdown/mock.js"></script>
  <link rel="stylesheet" type="text/css" href="searchdropdown/jquery.dropdown.css">
  <script src="searchdropdown/jquery.dropdown.js"></script>

    <?php 
include"allcss.php";    
?>

        <body class="hold-transition sidebar-mini">










<!-- AJAX INSERT UPDATE DELETE -->

  <?php $val = $_GET['edit']; ?>
  
 


<!-- AJAX INSERT UPDATE DELETE -->


<!-- AJAX INSERT UPDATE DELETE -->
<div id="customerModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <h4 class="modal-title">Create New Records</h4>
   </div>
   <div class="modal-body">
    <input type="hidden" name="vcid" id="vcid" value="<?php echo $val ?>" class="form-control" />

                                              <div class="col-sm-6">

                                                    <div class="form-group">
                                                       <label>Enter Contact Person *</label>
                                                        <input type="text" name="contactpersonn" id="contactpersonn" class="form-control" />  
                                                    </div>

                                                </div>

                                                <div class="col-sm-6">

                                                    <div class="form-group">
                                                     <label>Enter Department</label>
                                                    <input type="text" name="departmentt" id="departmentt" class="form-control" />
       
                                                    </div>

                                                </div>




  <div class="col-sm-6">

                                                    <div class="form-group">
                                                     <label>Enter Job / Title</label>
    <input type="text" name="jobtitlee" id="jobtitlee" class="form-control" />
   
       
                                                    </div>

                                                </div>



 
  
     <div class="col-sm-6">

                                                    <div class="form-group">
                                                      <label>Enter Landline</label>
    <input type="number" name="landlinee" id="landlinee" class="form-control" />
  
   
       
                                                    </div>

                                                </div>



     <div class="col-sm-6">

                                                    <div class="form-group">
                                                       <label>Enter Mobile No 1 *</label>
    <input type="number" name="mobile11" id="mobile11" class="form-control" />
   
   
       
                                                    </div>

                                                </div>



  
    <div class="col-sm-6">

                                                    <div class="form-group">
                                                       <label>Enter Mobile No 2</label>
    <input type="number" name="mobile22" id="mobile22" class="form-control" />
   
   
   
       
                                                    </div>

                                                </div>


               


    <div class="col-sm-6">

                                                    <div class="form-group">
                                                       <label>Enter Email Id 1 *</label>
    <input type="email" name="emailid11" id="emailid11" class="form-control" />
    
   
       
                                                    </div>

                                                </div>

  <div class="col-sm-6">

                                                    <div class="form-group">
                                                        <label>Enter Email Id 2</label>
    <input type="email" name="emailid22" id="emailid22" class="form-control" />
   
    
   
       
                                                    </div>

                                                </div>


   </div>
   <div class="modal-footer">
    <input type="hidden" name="customer_id" id="customer_id" />
    <input type="submit" name="action" id="action" class="btn btn-add" />
   </div>
  </div>
 </div>
</div>

<!-- AJAX INSERT UPDATE DELETE -->






            <!-- Site wrapper -->
            <div class="wrapper">
                <?php 
                include "header.php";    
                ?>

                    <div class="content-wrapper">

                        <section class="content-header">
                            <div class="header-icon">
                                <i class="fa fa-users"></i>
                            </div>

                            <div class="header-title">
                                <h1>View Contact's Data</h1>
                                <small>Contact's Data list</small>
                            </div>
                        </section>
                        <!-- Main content -->

                        <section class="content">


                            <form action="" method="post" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="panel panel-bd lobidrag">
                                            <div class="panel-heading" style="background-color:#009688e6;">
                                                <div class="btn-group" id="buttonexport">

                                                </div>
                                            </div>

<?php
include "../db.php";


  $cc = implode(',',$_POST['companycategory']);
   
     $cc1 = implode(',',$_POST['companyindustries']);

       $cc2 = implode(',',$_POST['companyproducts']);

         $cc3 = implode(',',$_POST['companyexhibitions']);   


// UPDATE
if(isset($_POST['update']))
{
$result = mysqli_query($con,"UPDATE vc SET cname='".$_POST['cname']."',contactperson='".$_POST['contactperson']."',department='".$_POST['department']."',jobtitle='".$_POST['jobtitle']."',mobileno2='".$_POST['mobileno2']."',landline='".$_POST['landline']."',emailid2='".$_POST['emailid2']."',pincode='".$_POST['pincode']."',suburb='".$_POST['suburb']."',city='".$_POST['city']."',state='".$_POST['state']."',country='".$_POST['country']."',addressline1='".$_POST['addressline1']."',addressline2='".$_POST['addressline2']."',landlineno1='".$_POST['landlineno1']."',landlineno2='".$_POST['landlineno2']."',fax='".$_POST['fax']."',website='".$_POST['website']."',panno='".$_POST['panno']."',gstno='".$_POST['gstno']."',companyprofile='".$_POST['companyprofile']."',companycategory='".$cc."',companyindustries='".$cc1."',companyproducts='".$cc2."',companyexhibitions='".$cc3."'
 WHERE id=".$_GET['edit']);



               ?>
                <script>
                alert('Successfully Updated..');
               window.location.href='customer.php';
                </script>
                <?php

}



?>



                                            <?php

                                               include "../db.php";
$var=$_GET['edit'];

$result = mysqli_query($con,"SELECT * FROM vc WHERE id=$var");
while($row = mysqli_fetch_array($result))
{

?>
                                                <div class="panel-body">
                                                    <div class="col-sm-4">

                                                        <div class="form-group">
                                                            <label>Company Name</label>
                                                            <input type="text" name="cname" class="form-control" placeholder="Enter Company Name" value="<?php echo $row['cname']; ?>">
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>Mobile No 1 [ Primary ] </label>

                                                            <div id="error_msg"></div>
                                                            <div>

                                                                <input type="number" name="mobileno1" class="form-control" placeholder="Enter your Mobile No [ Primary ] " value="<?php echo $row['mobileno1']; ?>" disabled="">

                                                                <span style="color:#009688;    font-weight: bold;"></span>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>Email Id 1 [ Primary ] </label>

                                                            <div id="error_msg"></div>

                                                            <div>
                                                                <input type="email" name="emailid1" class="form-control" placeholder="Enter your Email Id [ Primary ] " value="<?php echo $row['emailid1']; ?>" disabled="">
                                                                <span style="color:#009688;    font-weight: bold;"></span>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="panel panel-bd lobidrag">
                                            <div class="panel-heading" style="background-color:#009688e6;">
                                                <div class="btn-group" id="buttonexport">

                                                </div>
                                            </div>

                                            <div class="panel-body">
                                                <div class="col-sm-4">

                                                    <div class="form-group">
                                                        <label>Contact Person </label>
                                                        <input type="text" name="contactperson" class="form-control" placeholder="Enter the Name of Contact Person" value="<?php echo $row['contactperson']; ?>">
                                                    </div>

                                                </div>

                                                <div class="col-sm-4">

                                                    <div class="form-group">
                                                        <label>Department </label>
                                                        <input type="text" name="department" class="form-control" placeholder="Enter your Department in Company" value="<?php echo $row['department']; ?>">
                                                    </div>

                                                </div>

                                                <div class="col-sm-4">

                                                    <div class="form-group">
                                                        <label>Job / Title </label>
                                                        <input type="text" name="jobtitle" class="form-control" placeholder="Enter your Job / Title in Company" value="<?php echo $row['jobtitle']; ?>">
                                                    </div>

                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Mobile No 2 </label>
                                                        <input type="number" name="mobileno2" class="form-control" placeholder="Enter your Mobile No " value="<?php echo $row['mobileno2']; ?>">
                                                    </div>

                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Landline No </label>
                                                        <input type="number" name="landline" class="form-control" placeholder="Enter your Landline No " value="<?php echo $row['landline']; ?>">
                                                    </div>

                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Email Id 2 </label>
                                                        <input type="email" name="emailid2" class="form-control" placeholder="Enter your Email Id" value="<?php echo $row['emailid2']; ?>">
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>




<!-- AJAX INSERT UPDATE DELETE -->
   <button type="button" id="modal_button" class="btn btn-add">Add More Contacts</button>
   
   <br />
   <br />
   <div id="result" > 

   </div>
<!-- AJAX INSERT UPDATE DELETE -->





                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="panel panel-bd lobidrag">
                                                                <div class="panel-heading" style="background-color:#009688e6;">
                                                                    <div class="btn-group" id="buttonexport">

                                                                    </div>
                                                                </div>

                                                                <div class="panel-body">











<!-- PINCODE KA SEARCH KA CODE -->
  <div class="col-sm-12">
 


                                                    <div class="form-group">
                                                        <label>Search for the Pincode</label>
                                                        <input type="text" id="country" name="country" class="form-control"  placeholder="Enter pincode">
                                                    </div>


<div style="display: none"> 
    Suburb:         <span  id="taluka">  </span>  <br/>
   Pincode:  <span id="divison"></span>  <br/>
    city:    <span id="reg"></span>      <br/>
    state:    <span id="cir"></span>      <br/>
  

</div>
</div>
<!-- PINCODE KA SEARCH KA CODE -->




                                                                    <div class="col-sm-4">

                                                                        <div class="form-group">
                                                                            <label>Pincode</label>
                                                                            <input id="pincode" type="text" name="pincode" class="form-control" value="<?php echo $row['pincode']; ?>" placeholder="Enter Pincode">
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-sm-4">

                                                                        <div class="form-group">
                                                                            <label>Suburb</label>
        

       


           <input id="skill_input" type="text" name="suburb" class="form-control" placeholder="Enter Suburb" value="<?php echo $row['suburb']; ?>">
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-sm-4">

                                                                        <div class="form-group">
                                                                            <label>City</label>
                                                                            <input type="text" name="city" class="form-control" id="city" placeholder="Enter your City" value="<?php echo $row['city']; ?>">
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-sm-4">

                                                                        <div class="form-group">
                                                                            <label>State</label>
                                                                            <input type="text" name="state" class="form-control" id="state" placeholder="Enter your State" value="<?php echo $row['state']; ?>">
                                                                        </div>

                                                                    </div>

                                                                    <div class="col-sm-4">

                                                                        <div class="form-group">
                                                                            <label>Country</label>
                                                                            <input type="text" name="country" class="form-control" id="ctr" placeholder="Enter your Country" value="<?php echo $row['country']; ?>">
                                                                        </div>

                                                                    </div>

                                                                    <div class="col-sm-12">

                                                                        <div class="form-group">
                                                                            <label>Address Line 1</label>
                                                                            <input type="text" name="addressline1" class="form-control" placeholder="Enter your Address Line 1" value="<?php echo $row['addressline1']; ?>">
                                                                        </div>

                                                                    </div>

                                                                    <div class="col-sm-12">

                                                                        <div class="form-group">
                                                                            <label>Address Line 2</label>
                                                                            <input type="text" name="addressline2" class="form-control" placeholder="Enter your Address Line 2" value="<?php echo $row['addressline2']; ?>">
                                                                        </div>

                                                                    </div>

                                                                    <div class="col-sm-4">

                                                                        <div class="form-group">
                                                                            <label>Landline No 1</label>
                                                                            <input type="number" name="landlineno1" class="form-control" placeholder="Enter Landline No 1" value="<?php echo $row['landlineno1']; ?>">
                                                                        </div>

                                                                    </div>

                                                                    <div class="col-sm-4">

                                                                        <div class="form-group">
                                                                            <label>Landline No 2</label>
                                                                            <input type="number" name="landlineno2" class="form-control" placeholder="Enter Landline No 2" value="<?php echo $row['landlineno2']; ?>">
                                                                        </div>

                                                                    </div>

                                                                    <div class="col-sm-4">

                                                                        <div class="form-group">
                                                                            <label>FAX No </label>
                                                                            <input type="text" name="fax" class="form-control" placeholder="Enter your Company's FAX No" value="<?php echo $row['fax']; ?>">
                                                                        </div>

                                                                    </div>

                                                                    <div class="col-sm-4">

                                                                        <div class="form-group">
                                                                            <label>Website</label>
                                                                            <input type="text" name="website" class="form-control" placeholder="Enter your Company's Website" value="<?php echo $row['website']; ?>">
                                                                        </div>

                                                                    </div>

                                                                    <div class="col-sm-4">

                                                                        <div class="form-group">
                                                                            <label>Company's PAN No</label>
                                                                            <input type="text" name="panno" class="form-control" placeholder="Enter the Company's PAN No" value="<?php echo $row['panno']; ?>">
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-sm-4">

                                                                        <div class="form-group">
                                                                            <label>Company's GST No </label>
                                                                            <input type="text" name="gstno" class="form-control" placeholder="Enter the Company's GST No " value="<?php echo $row['gstno']; ?>">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


 



   
    
   
 




                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="panel panel-bd lobidrag">
                                                                <div class="panel-heading" style="background-color:#009688e6;">
                                                                    <div class="btn-group" id="buttonexport">

                                                                    </div>
                                                                </div>

                                                                <div class="panel-body">

                                                                    <div class="col-sm-12">

                                                                        <div class="form-group">
                                                                            <label>Company's Profile</label>

                                                                            <textarea type="text" name="companyprofile" class="form-control">
                                                                                <?php echo $row['companyprofile']; ?>
                                                                            </textarea>

                                                                        </div>

                                                                    </div>








                                                                    <div class="col-sm-12">





 

<?php $cocategory =  explode(',', $row['companycategory']); 

$cocat = count($cocategory);

?>

<?php $coindustries =  explode(',', $row['companyindustries']); 

$coind = count($coindustries);

?>

<?php $coproducts =  explode(',', $row['companyproducts']); 

$copro = count($coproducts);

?>

<?php $coexhibitions =  explode(',', $row['companyexhibitions']); 

$coex = count($coexhibitions);

?>


























                                                                        <div class="form-group">

                                                                            <label>Category</label>

                                                                            <div style="width: 100%" class="input-group">




  <div class="dropdownvala">
          <select style="" name="companycategory[]" id="mul-2" multiple placeholder="Select Company Category">

            <?php for($i=0; $i<$cocat; $i++){

echo '

<option selected="">'.$cocategory[$i].'</option>  ';
            }
?>

                                                            <?php

                                                    include"../db.php";

$result = mysqli_query($con,"SELECT * FROM category where type='category' order by id desc");
while($row = mysqli_fetch_array($result))
{

if (!in_array($row['catname'], $cocategory)) {
echo '


          <option value="'.$row['catname'].'">'.$row['catname'].'</option>
      
';   
}

} 
?>

        </select>
      </div>


                                                                               




                                                                            </div>
                                                                        </div>
                                                                    </div>




                                                                   






    <div class="col-sm-12">
                                                                        <div class="form-group">

                                                                            <label>Industries</label>

                                                                            <div style="width: 100%" class="input-group">

                                                                              

  <div class="dropdownvala">
        <select   name="companyindustries[]" id="mul-2" multiple placeholder="Select">
        
                                                          <?php for($i=0; $i<$coind; $i++){

echo '

<option selected="">'.$coindustries[$i].'</option>  ';
            }
?>

                                                        

                                                            <?php

                                                    include"../db.php";

$result = mysqli_query($con,"SELECT * FROM category where type='industries' order by id desc");
while($row = mysqli_fetch_array($result))
{



if (!in_array($row['catname'], $coindustries)) {
echo '


          <option value="'.$row['catname'].'">'.$row['catname'].'</option>
      
';   
}

} 
?>

        </select>
      </div>
            

                                                                              

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">

                                                                            <label>Products</label>

                                                                            <div style="width: 100%" class="input-group">

                                                                                <div  class="dropdownvala">
        <select  name="companyproducts[]" id="mul-2" multiple placeholder="Select Company Products">

    <?php for($i=0; $i<$copro; $i++){

echo '

<option selected="">'.$coproducts[$i].'</option>  ';
            }
?>

                                                       

                                                            <?php

                                                    include"../db.php";

$result = mysqli_query($con,"SELECT * FROM category where type='products' order by id desc");
while($row = mysqli_fetch_array($result))
{


if (!in_array($row['catname'], $coproducts)) {
echo '


          <option value="'.$row['catname'].'">'.$row['catname'].'</option>
      
';   
}

} 
?>

        </select>
      </div>

           

         

                                                                            

                                                                            </div>
                                                                        </div>
                                                                    </div>





   <div class="col-sm-12">
                                                                        <div class="form-group">

                                                                            <label>Exhibitions</label>

                                                                            <div style="width: 100%" class="input-group">




  <div class="dropdownvala">
          <select style="" name="companyexhibitions[]" id="mul-2" multiple placeholder="Select Company Exhibitions">

            <?php for($i=0; $i<$coex; $i++){

echo '

<option selected="">'.$coexhibitions[$i].'</option>  ';
            }
?>

                                                            <?php

                                                    include"../db.php";

$result = mysqli_query($con,"SELECT * FROM category where type='exhibitions' order by id desc");
while($row = mysqli_fetch_array($result))
{

if (!in_array($row['catname'], $coexhibitions)) {
echo '


          <option value="'.$row['catname'].'">'.$row['catname'].'</option>
      
';   
}

} 
?>

        </select>
      </div>


                                                                               




                                                                            </div>
                                                                        </div>















                                                                    <div class="col-md-12 text-center">


  <input class="btn btn-add" type="submit" name="update" value="Update" />

                                                                       
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                    </div>

                    </form>
                    <?php   }

?>

                        </section>
                        <!-- /.content -->
            </div>

<!-- DROPDOWN  KA CODE -->


  <script>
    var Random = Mock.Random;
  
   $('.dropdownvala').dropdown({
      limitCount: 1000,
      searchable: true,
       multipleMode: 'label'
    });

   
  </script>
<!-- DROPDOWN  KA CODE -->



         
            <!--CHECKING SCRIPT OF EMAIL ID AND MOBILE EXIST OR NOT 

            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>-->

            <script src="customeremailexist.js"></script>
            <!--CHECKING SCRIPT OF EMAIL ID AND MOBILE EXIST OR NOT -->
            <script src="../assets/plugins/modals/classie.js" type="text/javascript"></script>
            <script src="../assets/plugins/modals/modalEffects.js" type="text/javascript"></script>

        <!-- AJAX INSERT UPDATE DELETE -->   


<script>
$(document).ready(function(){
 fetchUser(); 

// View CODE 


 function fetchUser() 
 {

var action = "load";

  var vcid = $('#vcid').val(); 


  $.ajax({
   url : "action.php", 
   method:"POST",
   data:{action:action,vcid:vcid},
   success:function(data){
    $('#result').html(data); 
   }
  });
 }

// View CODE 









// UPDATE CODE 

 $('#modal_button').click(function(){
  $('#customerModal').modal('show');
  $('#contactpersonn').val(''); //This will clear Modal first name textbox
  $('#departmentt').val(''); //This will clear Modal last name textbox

   // $('#vcid').val('');
 $('#jobtitlee').val('');
  $('#landlinee').val('');


 $('#mobile11').val('');
  $('#mobile22').val('');

 $('#emailid11').val('');
  $('#emailid22').val('');

  $('.modal-title').text("Create New Records"); //It will change Modal title to Create new Records
  $('#action').val('Create'); //This will reset Button value ot Create
 });

 //This JQuery code is for Click on Modal action button for Create new records or Update existing records. This code will use for both Create and Update of data through modal
 $('#action').click(function(){
  var contactpersonn = $('#contactpersonn').val(); //Get the value of first name textbox.
  var departmentt = $('#departmentt').val(); //Get the value of last name textbox

 var vcid = $('#vcid').val(); 
 var jobtitlee = $('#jobtitlee').val(); //Get the value of last name textbox
 var landlinee = $('#landlinee').val(); //Get the value of last name textbox



 var mobile11 = $('#mobile11').val(); //Get the value of last name textbox
 var mobile22 = $('#mobile22').val(); //Get the value of last name textbox
 var emailid11 = $('#emailid11').val(); //Get the value of last name textbox
 var emailid22 = $('#emailid22').val(); //Get the value of last name textbox



  var id = $('#customer_id').val();  //Get the value of hidden field customer id
  var action = $('#action').val();  //Get the value of Modal Action button and stored into action variable
  if(contactpersonn != '' && mobile11 != '' && emailid11 != '') //This condition will check both variable has some value
  {
   $.ajax({
    url : "action.php",    //Request send to "action.php page"
    method:"POST",     //Using of Post method for send data
    data:{jobtitlee:jobtitlee,landlinee:landlinee,contactpersonn:contactpersonn, departmentt:departmentt,vcid:vcid, id:id,mobile11:mobile11,mobile22:mobile22,emailid11:emailid11,emailid22:emailid22, action:action}, //Send data to server
    success:function(data){
     alert(data);    //It will pop up which data it was received from server side
     $('#customerModal').modal('hide'); //It will hide Customer Modal from webpage.
     fetchUser();    // Fetch User function has been called and it will load data under divison tag with id result
    }
   });
  }
  else
  {
   alert("Both Fields are Required"); //If both or any one of the variable has no value them it will display this message
  }
 });










 $(document).on('click', '.update', function(){
  var id = $(this).attr("id"); 
  var action = "Select";   
  $.ajax({
   url:"action.php",  
   method:"POST",   
   data:{id:id, action:action},
   dataType:"json",  
   success:function(data){
    $('#customerModal').modal('show');   
    $('.modal-title').text("Update Records"); 
    $('#action').val("Update");     
    $('#customer_id').val(id);     
    $('#contactpersonn').val(data.contactpersonn);  
    $('#departmentt').val(data.departmentt);

    $('#vcid').val(data.vcid);
   $('#jobtitlee').val(data.jobtitlee);
      $('#landlinee').val(data.landlinee);


       $('#mobile11').val(data.mobile11);
      $('#mobile22').val(data.mobile22);
       $('#emailid11').val(data.emailid11);
      $('#emailid22').val(data.emailid22);
   }
  });
 });


// UPDATE CODE 




// DELETE CODE 

 $(document).on('click', '.delete', function(){
  var id = $(this).attr("id"); 
  if(confirm("Are you sure you want to remove this data?")) 
  {
   var action = "Delete"; 
   $.ajax({
    url:"action.php",   
    method:"POST",     
    data:{id:id, action:action},
    success:function(data)
    {
     fetchUser();   
     alert(data);    
    }
   })
  }
  else  
  {
   return false;
  }
 });


// DELETE CODE 



});
</script>


<!-- AJAX INSERT UPDATE DELETE -->

<!-- PINCODE SEARCH KA CODE -->




  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
   $( "#country" ).autocomplete({
      source: function( request, response ) {
        $.ajax({
          url: "request.php",
          dataType: "json",
          data: {
            q: request.term
          },
          success: function( data ) {
            response( data );
          }
        });
      },
      minLength: 3,  // Set minum input length
      select: function( event, ui ) {
            //do something on select event
            var vl = ui.item.id;      
            var data = vl.split("-");
            console.log(data);
            $("#taluka").html(data[3]);
            $("#divison").html(data[0]);
         
            $("#reg").html(data[1]);
            $("#cir").html(data[2]);
          // $("#state").html(data[4]);
        //console.log(ui.item); // ui.item is  responded json from server
       

        var mysave = $('#taluka').html();
        $("#suburb").val(mysave);

        var mysave1 = $('#divison').html();
        $("#pincode").val(mysave1);


        var mysave2 = $('#reg').html();
        $("#city").val(mysave2);

        var mysave3 = $('#cir').html();
        $("#state").val(mysave3);


$("#ctr").val("India");

      },
      open: function() {
                 // D0 something on open event.
      },
      close: function() {
               // Do omething on close event
      }
    });
  });
  </script>



<!-- PINCODE SEARCH KA CODE -->

<?php include "footer.php" ?>




