
<?php //error_reporting(E_ERROR | E_PARSE);

  $email = $_POST['email'];

?>
 <!DOCTYPE html>  
 <html>  
      <head>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />    <style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {background-color: #f9f9f9;
    border: 4px solid white;
  line-height: 16.2px;
  font-size: 13px;
  float: left;
  width: 49.99%;
  padding: 10px;
  height: auto; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>   
      <?php 
include"allcss.php";    
?>

     
      </head>  
      <body style="background-color: white">  

<div class="container">
<div class="row">


  <?php 
      if(!empty($_POST['email'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['email'] as $selected){

echo '  <div class="column" >

';

echo $selected.

"<br><br>
</div>";
}

}
?>


</div>
</div>
<div class="container">
<button class="btn btn-add" id="db" onclick="myFunction()">Print this page</button>
</div>

<script>
function myFunction() {
  document.getElementById('db').style.visibility="hidden";
  window.print();


}
</script>
           
      </body>  
</html>  

