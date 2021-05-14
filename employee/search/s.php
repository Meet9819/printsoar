
    <script src='jquery.js'></script>
    <script src='multifilter.js'></script>
 
    <link href='style.css' media='screen' rel='stylesheet' type='text/css' />
  </head>
  <script type='text/javascript'>
    //<![CDATA[
      $(document).ready(function() {
        $('.filter').multifilter()
      })
    //]]>
  </script>
  <body>


<div class='container'>
  <div class='filters'>
    <div class='filter-container'>
      <input autocomplete='off' class='filter' name='Customer Name' placeholder='Customer Name' data-col='Customer Name'/>
    </div>
    <div class='filter-container'>
      <input autocomplete='off' class='filter' name='Job Title' placeholder='Job Title' data-col='Job Title'/>
    </div>
    <div class='filter-container'>
      <input autocomplete='off' class='filter' name='Department' placeholder='Department' data-col='Department'/>
    </div>
    <div class='filter-container'>
      <input autocomplete='off' class='filter' name='mobile no 1' placeholder='mobile no 1' data-col='mobile no 1'/>
    </div>
    <div class='clearfix'></div>
  </div>
</div>




<div class='container'>
  <table>
    <thead>
      <th>Customer Name</th>
      <th>Job Title</th>
      <th>Department</th>
      <th>mobile no 1</th>
    </thead>
    <tbody> 

      <?php
$con = mysqli_connect('localhost','root','','soarprint');

//$con = mysqli_connect('localhost','printnuk_soar','soarprint@123','printnuk_soarprint');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>



<?php 

/* code for data delete */
$result = mysqli_query($con,"SELECT * FROM vc order by id desc");
while($row = mysqli_fetch_array($result))
{
echo '  

                                    <tr>

    
   <td>' . $row['cname'] . '</td>
  <td>' . $row['jobtitle'] . '</td> 
    <td>'.$row['department'].'</td>
  <td> ' . $row['mobileno1'] . '</td> 
 



                                    </tr>

';
}
?>

    
    </tbody>
  </table>
</div>

