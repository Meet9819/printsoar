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

    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  





  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>


  <script type="text/javascript" src="searchdropdown/mock.js"></script>
  <link rel="stylesheet" type="text/css" href="searchdropdown/jquery.dropdown.css">
  <script src="searchdropdown/jquery.dropdown.js"></script>




    <?php 
include"allcss.php";    
?>

        <body class="hold-transition sidebar-mini">
            <!--preloader-->
            <div id="preloader">
                <div id="status"></div>
            </div>
            <!-- Site wrapper -->
            <div class="wrapper">
                <?php 
include "header.php";    
?>

                    <div class="content-wrapper">
                        <!-- Content Header (Page header) -->
 
                        <section class="content-header">
                            <div class="header-icon">
                                <i class="fa fa-users"></i>
                            </div>

                          

                                <div class="header-title">
                                    <h1>Add Contact's Data</h1>
                                    <small>Contact's Data list</small>
                                </div>
                        </section>
                        <!-- Main content -->

                        <section class="content">

<!--CHECKING SCRIPT OF EMAIL ID AND MOBILE EXIST OR NOT -->

<?php 

$db = mysqli_connect('localhost','printnuk_soar','soarprint@123','printnuk_soarprint');

//$db = mysqli_connect('localhost','root','','soarprint');

if (isset($_POST['emailid1_check'])) {

    $emailid1 = $_POST['emailid1'];

    $sql = "SELECT * FROM vc WHERE emailid1='$emailid1'";

    $results = mysqli_query($db, $sql);

    if (mysqli_num_rows($results) > 0) {

      echo "taken"; 

    }else{

      echo 'not_taken';

    }

    exit();

  }











if (isset($_POST['mobileno1_check'])) {

    $mobileno1 = $_POST['mobileno1'];

    $sql = "SELECT * FROM vc WHERE mobileno1='$mobileno1'";

    $results = mysqli_query($db, $sql);

    if (mysqli_num_rows($results) > 0) {

      echo "taken"; 

    }else{

      echo 'not_taken';

    }

    exit();

  }

?>
<!--CHECKING SCRIPT OF EMAIL ID AND MOBILE EXIST OR NOT -->






























<form name="add_name" id="add_name">


  <?php
//$con = mysqli_connect('localhost','root','','soarprint');

$con = mysqli_connect('localhost','printnuk_soar','soarprint@123','printnuk_soarprint');


$result = mysqli_query($con,"SELECT * FROM vc ORDER BY id DESC LIMIT 1");

while($row = mysqli_fetch_array($result))

{
$abc = $row['id']+1;
}
?>


  <input type="hidden" name="id" value="<?php echo $abc; ?>">

           <input type="hidden" name="datee" value="<?php echo date("l jS \of F Y h:i:s A")  ?>">
<input type="hidden" name="entryperson" value="<?php echo $_SESSION['user']['username'] ?>">        

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
                                                        <label>Company Name</label>
                                                        <input type="text" name="cname" id="cname" class="form-control"  placeholder="Enter Company Name" required> 
                                                        <span id="cnameval" style="color:#f60000; font-weight: bold;"></span>
                                                     
                                                    </div>

                                                </div>




                                          <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Mobile No 1 [ Primary ] </label>
                                                       
                                                        <div id="error_msg"></div>
                                                         <div>



     <script type="text/javascript">

       function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                var errorMsg = document.getElementById("errorMsg");
                errorMsg.style.display = "block";
                document.getElementById("errorMsg").innerHTML = "  Please enter only Numbers.  ";
                return false;
            }
           
            return true;
        }

        function ValidateNo() {
            var phoneNo = document.getElementById('mobileno1');
            var errorMsg = document.getElementById("errorMsg");
            var successMsg = document.getElementById("successMsg");

           //  if (phoneNo.value == "" || phoneNo.value.length != 10) {
             //   errorMsg.style.display = "block";
            //    successMsg.style.display = "none";
            //    document.getElementById("errorMsg").innerHTML = "  Please enter your Mobile No.  ";
            //    return false;
           // }
          //  if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {
           //     errorMsg.style.display = "block";
           ///     successMsg.style.display = "none";
           //     document.getElementById("errorMsg").innerHTML = "  Mobile No. is not valid, Please Enter 10 Digit Mobile No. ";
           //     return false;
          //  }





     var email = document.getElementById('emailid1');
            var mailFormat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var errorMsgg = document.getElementById("errorMsgg");
            var successMsgg = document.getElementById("successMsgg");

            if (email.value == "") {
                errorMsgg.style.display = "block";
                document.getElementById("errorMsgg").innerHTML = "  Please enter your Email Id  ";
            }
            else if (!mailFormat.test(email.value)) {
                errorMsgg.style.display = "block";
                document.getElementById("errorMsgg").innerHTML = "  Email Address is not valid, Please provide a valid Email ";
                email.focus;
                return false;
            }
            else {
              
            }
            
            return true;

   

            }
    </script>
    
                                                        <input type="number" name="mobileno1" class="form-control"  placeholder="Enter your Mobile No [ Primary ] " onkeypress="return isNumber(event)" id="mobileno1" required>



   <span style="color:#f60000;    font-weight: bold;" id="errorMsg" class="dsNone error"></span>

        <span style="color:#f60000;    font-weight: bold;" id="successMsg" class="dsNone success">
        </span>
                            
                                                  
                                                         <span style="color:#f60000;    font-weight: bold;"></span>
                                                          <span id="mobileno1val" style="color:#f60000;    font-weight: bold;"></span>  </div>


                                                    </div>

                                                </div>


                                           <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Email Id 1 [ Primary ] </label>
                                                      
                                                       <div id="error_msg"></div>

                                                        <div>  
                                                         <input type="email" id="emailid1" name="emailid1" class="form-control"  placeholder="Enter your Email Id [ Primary ] " required>

    <span style="color:#f60000;    font-weight: bold;"  id="errorMsgg" class="dsNone error"></span>
        <span style="color:#f60000;    font-weight: bold;" id="successMsg" class="dsNone success">
        </span>
        
        
                                                        <span style="color:#f60000;    font-weight: bold;"></span>
                                                        </div>
 


 <span id="emailid1val" style="color:#f60000; font-weight: bold;"></span>

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

                                                           <span id="contactpersonval" style="color:#f60000; font-weight: bold;"></span>

                                                        <input type="text" name="contactperson" id="contactperson" class="form-control"  placeholder="Enter the Name of Contact Person" required>
                                                    </div>

                                                </div>

                                                <div class="col-sm-4">


                                                    <div class="form-group">
                                                        <label>Department </label> 
                                                         <span id="departmentval" style="color:#f60000; font-weight: bold;"></span>


                                                        <input type="text" name="department" id="department" class="form-control"  placeholder="Enter your Department in Company" required>
                                                    </div>

                                                </div>

                                                <div class="col-sm-4">

                                                    <div class="form-group">
                                                        <label>Job / Title </label>   
                                                        <span id="jobtitleval" style="color:#f60000; font-weight: bold;"></span>
                                                        <input type="text" name="jobtitle" id="jobtitle" class="form-control"  placeholder="Enter your Job / Title in Company" required>
                                                    </div>

                                                </div>

                                            

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Mobile No 2 </label>
                                                        <input type="number" name="mobileno2" class="form-control"  placeholder="Enter your Mobile No " required>
                                                    </div>

                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Landline No </label>
                                                        <input type="number" name="landline" class="form-control"  placeholder="Enter your Landline No " required>
                                                    </div>

                                                </div>

                                             

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Email Id 2 </label>
                                                        <input type="email" name="emailid2" class="form-control"  placeholder="Enter your Email Id" required>
                                                    </div>

                                                </div>

                                    </div>
                                </div>
                            </div>
                        </div>







              

    <button type="button" name="add" id="add" class="btn btn-add">Add More Contact's</button>  
<br><br>

                      
         <div class="row" id="dynamic_field">  </div>










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
                                                        <input type="text" id="country" name="country" class="form-control"  placeholder="Enter pincode" required>
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
                                                        <input  id="pincode" type="text" name="pincode" class="form-control" value="" placeholder="Enter Pincode" required>
                                                    </div>

                                                </div>
                                                <div class="col-sm-4">

                                                    <div class="form-group">
                                                        <label>Suburb</label>
                                                       
 <span id="suburbval" style="color:#f60000; font-weight: bold;"></span>

                                                        <input type="text" id="skill_input" name="suburb" class="form-control"  placeholder="Enter Suburb" required>
                                                    </div>

                                                </div>   <div class="col-sm-4">

                                                    <div class="form-group">
                                                        <label>City</label>
                                                        <input type="text" name="city" class="form-control"  id="city" placeholder="Enter your City" required>
                                                    </div>

                                                </div>
                                                <div class="col-sm-4">

                                                 

                                                    <div class="form-group">
                                                        <label>State</label>
                                                        <input type="text" name="state" class="form-control" id="state" placeholder="Enter your State" required>
                                                    </div>

                                                </div>

                                                <div class="col-sm-4">


                                                    <div class="form-group">
                                                        <label>Country</label>
                                                        <input type="text" name="country" class="form-control" id="ctr" placeholder="Enter your Country" required>
                                                    </div>

                                                </div>

                                             
                                               

                                                <div class="col-sm-12">

                                                    <div class="form-group">
                                                        <label>Address Line 1</label>
                                                        <input type="text" name="addressline1" class="form-control"  placeholder="Enter your Address Line 1" required>
                                                    </div>

                                                </div>

                                                <div class="col-sm-12">

                                                    <div class="form-group">
                                                        <label>Address Line 2</label>
                                                        <input type="text" name="addressline2" class="form-control"  placeholder="Enter your Address Line 2" required>
                                                    </div>

                                                </div>

                                                <div class="col-sm-4">


                                                    <div class="form-group">
                                                        <label>Landline No 1</label>
                                                        <input type="number" name="landlineno1" class="form-control"  placeholder="Enter Landline No 1" required>
                                                    </div>

                                                </div>

                                                <div class="col-sm-4">


                                                    <div class="form-group">
                                                        <label>Landline No 2</label>
                                                        <input type="number" name="landlineno2" class="form-control"  placeholder="Enter Landline No 2" required>
                                                    </div>

                                                </div>

                                                <div class="col-sm-4">


                                                    <div class="form-group">
                                                        <label>FAX No </label>
                                                        <input type="text" name="fax" class="form-control" placeholder="Enter your Company's FAX No"  required>
                                                    </div>

                                                </div>

                                                <div class="col-sm-4">

                                                    <div class="form-group">
                                                        <label>Website</label>
                                                        <input type="text" name="website" class="form-control" placeholder="Enter your Company's Website"  required>
                                                    </div>

                                                </div>





                                                <div class="col-sm-4">

                                                    <div class="form-group">
                                                        <label>Company's PAN No</label>
                                                        <input type="text" name="panno" class="form-control"  placeholder="Enter the Company's PAN No" required>
                                                    </div>

                                                </div>
                                                <div class="col-sm-4">

                                                    <div class="form-group">
                                                        <label>Company's GST No </label>
                                                        <input type="text" name="gstno" class="form-control"  placeholder="Enter the Company's GST No " required>
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

                                                        <textarea type="text" name="companyprofile" class="form-control"></textarea>

                                                    </div>

                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">

                                                        <label>Category</label>

                                                        <div style="width: 100%" class="input-group">


   <div  class="dropdownvala">
      

        <select style=""  name="companycategory[]" id="mul-2" multiple placeholder="Select Company Category">



                                                            <?php

                                                    include"../db.php";

$result = mysqli_query($con,"SELECT * FROM category where type='category' order by id desc");
while($row = mysqli_fetch_array($result))
{

echo '


          <option value="' .$row['catname'].'">' .$row['catname'].'</option>
      
';
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



   <div  class="dropdownvala">
        <select style=""  name="companyindustries[]" id="mul-2" multiple placeholder="Select Company Industries">



                                                            <?php

                                                    include"../db.php";

$result = mysqli_query($con,"SELECT * FROM category where type='industries' order by id desc");
while($row = mysqli_fetch_array($result))
{

echo '


          <option value="'.$row['catname'].'">'.$row['catname'].'</option>
      
';
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
        <select style=""  name="companyproducts[]" id="mul-2" multiple placeholder="Select Company Products">



                                                            <?php

                                                    include"../db.php";

$result = mysqli_query($con,"SELECT * FROM category where type='products' order by id desc");
while($row = mysqli_fetch_array($result))
{

echo '


          <option value="'.$row['catname'].'">'.$row['catname'].'</option>
      
';
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

                                                         

  <div  class="dropdownvala">
        <select style=""  name="companyexhibitions[]" id="mul-2" multiple placeholder="Select Company Exhibitions">



                                                            <?php

                                                    include"../db.php";

$result = mysqli_query($con,"SELECT * FROM category where type='exhibitions' order by id desc");
while($row = mysqli_fetch_array($result))
{

echo '


          <option value="'.$row['catname'].'">'.$row['catname'].'</option>
      
';
} 
?>

        </select>
      </div>



                                                        </div>
                                                    </div>
                                                </div>

                                             

                                               <div class="col-md-12 text-center">
                                  <input type="button" name="submit" id="submit" class="btn btn-add" value="Save" onclick="ValidateNo();" />



                              </div>

                                              
                                    </div>
                                </div>
                            </div>
                        </div>



                </form>



<br><br><br><br><br>





                <script>
$(document).ready(function(){

    var abc = "<?php echo $abc ?>";

    var i=1;
    $('#add').click(function(){
        i++;
      //  $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="contactpersonn[]" placeholder="Enter your Name" class="form-control name_list" /><input type="text" name="vcid[]" value='+abc+'></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');


         $('#dynamic_field').append('<div id="row'+i+'" class="col-sm-12"><div style="box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);" class="panel panel-bd "><div class="panel-heading" style="text-align:right"><div class="btn-group" id="buttonexport"><button type="button" name="remove" id="'+i+'" class="btn btn-default btn_remove"><i class="fa fa-trash-o"></i></button></div></div><div class="panel-body"><div class="col-sm-4"><div class="form-group"><label>Contact Person </label><input type="hidden" name="vcid[]" value='+abc+'><input type="text" name="contactpersonn[]" class="form-control"  placeholder="Enter the Name of Contact Person" required></div></div><div class="col-sm-4"><div class="form-group"><label>Department</label><input type="text" name="departmentt[]" class="form-control" placeholder="Enter the Department" required></div> </div><div class="col-sm-4"><div class="form-group"><label>Job Title</label> <input type="text" name="jobtitlee[]" class="form-control" placeholder="Enter the Job Title" required></div> </div><div class="col-sm-4"> <div class="form-group">  <label>Mobile No 1</label> <input type="number" name="mobile11[]" class="form-control" placeholder="Enter the Mobile No 1" required> </div>  </div><div class="col-sm-4">  <div class="form-group"> <label>Mobile No 2</label><input type="number" name="mobile22[]" class="form-control" placeholder="Enter the Mobile No 2" required></div>   </div>  <div class="col-sm-4">    <div class="form-group">                   <label>Landline</label> <input type="number" name="landlinee[]" class="form-control" placeholder="Enter the Landline" required>  </div>     </div><div class="col-sm-4">  <div class="form-group"> <label>Email Id 1</label>    <input type="email" name="emailid11[]" class="form-control" placeholder="Enter the Email Id 1" required> </div>      </div>      <div class="col-sm-4">   <div class="form-group">  <label>Email Id 2</label>   <input type="email" name="emailid22[]" class="form-control" placeholder="Enter the Email Id 2" required>  </div>  </div>  </div></div></div>');


    });
    
    $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id"); 
        $('#row'+button_id+'').remove();
    });
    
     
  $('#submit').click(function(){   

  
    if( $("#cname").val() == "")
    {     document.getElementById('cname').focus();
    alert("Please Enter Company Name");
    $("#cnameval").html("Please Enter Company Name");
    }

 
   // else if($("#mobileno1").val().length != 10)
   // {
        
          //document.getElementById('mobileno1').focus();
          
  //  alert("Please Enter Mobile No 1 [Primary]");
  //  $("#mobileno1val").html("Please Enter Mobile No 1 [Primary]"); 
    
   
     
   // }

    else if( $("#emailid1").val() == "")
    {       document.getElementById('emailid1').focus();
    alert("Please Enter Email Id");
    $("#emailid1val").html("Please Enter Email Id 1 [Primary]");
    }







    else if($("#contactperson").val() == "")
    {     document.getElementById('contactperson').focus();
    alert("Please Enter Contact Person");
    $("#contactpersonval").html("*");
    }

    else if( $("#department").val() == "")
    {     document.getElementById('department').focus();  
    alert("Please Enter Department");
    $("#departmentval").html("*");
    }
    else if( $("#jobtitle").val() == "")
    {      document.getElementById('jobtitle').focus();  
    alert("Please Enter Job / Title");
    $("#jobtitleval").html("*");
    }


 else if( $("#skill_input").val() == "")
    { document.getElementById('skill_input').focus();  
    alert("Please Enter suburb ");
    $("#suburbval").html("*");
    }


else {
        $.ajax({
            url:"vcaddd.php",
            method:"POST",
            data:$('#add_name').serialize(),
            success:function(data)
            {
               // alert(data);
                $('#add_name')[0].reset();

                 alert('Successfully Inserted ...');
                window.location.href='customer.php';

            }


        });
      }   
        

         
    }); 

            

    
});
</script>









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






<!--CHECKING SCRIPT OF EMAIL ID AND MOBILE EXIST OR NOT -->

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="customeremailexist.js"></script>
<!--CHECKING SCRIPT OF EMAIL ID AND MOBILE EXIST OR NOT -->


            <?php 
include "footer.php";
?>