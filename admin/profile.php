<!DOCTYPE html>
<html lang="en">
   

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
                  <h1>Profile</h1>
                  <small>CRM</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                 
              
                 



                    <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href=""> 
                              <i class="fa fa-list"></i> Profile </a>  
                           </div>
                        </div>
                        <div class="panel-body">



 <form  action="" method="post" enctype="multipart/form-data" class="col-md-6 col-md-offset-3">
   
  
                              <div class="form-group">
                                 <label>Type of User </label>
                                 <input type="text" value="<?php echo $_SESSION['user']['typeofuser'];?>" class="form-control" disabled="">
                              </div>


 <div class="form-group">
                                 <label>Username</label>
                                 <input type="text" value="<?php echo $_SESSION['user']['username'];?>" class="form-control" disabled="">
                              </div>

                              <div class="form-group">
                                 <label>Email id </label>
                                 <input type="text" value="<?php echo $_SESSION['user']['email'];?>" class="form-control" disabled="">
                              </div>
                            
                                <div class="form-group">
                                 <label>Contact No </label>
                                 <input type="text" value="<?php echo $_SESSION['user']['contact'];?>" class="form-control" disabled="">
                              </div>
                            




                           </form>

                        </div>
                     </div>
                  </div>













               </div>
             
               <!-- /.row -->
              
            </section>
            <!-- /.content -->
         </div>
     

<?php 
include "footer.php";
?>




      </div>
    