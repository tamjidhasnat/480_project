

<head>
<meta charset="utf-8">
<meta name="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">


</head>
<div class="container h-10 ">
	<div class="row h-100 justify-content-center align-items-center">
<div style="background-image: url('bg/bg_create_doc.jpg');">
<a class="btn btn-dark" href="admin_dash.php" role="button">back to dashboard</a>
 <?php
	echo "<table class='table table-hover table-dark'>";
  echo "<thead>";
   echo" <tr>";
     echo " <th scope='col'>#</th>
      <th scope='col'>First Name</th>
      <th scope='col'>Last Name</th>
      <th scope='col'>Email</th>
      <th scope='col'>Currently Working</th>
      <th scope='col'>Degrees</th>
      <th scope='col'>BMDC No</th>
      <th scope='col'>Phone No</th>
      <th scope='col'>Action</th>";
    echo "</tr>";
    echo "</thead>";

   
    include 'dbconnect.php';  
    $sql="SELECT * FROM `doctor`";
    $result=$conn->query($sql);
    if($result->num_rows>0){
    	while ($row=$result->fetch_assoc()){
    echo "<tr>";
				echo "<td>" . $row['id']."</td>";
				echo "<td>" . $row['first_name']."</td>";
				echo "<td>" . $row['last_name']."</td>";
				echo "<td>" . $row['currently_working']."</td>";
				echo "<td>" . $row['designation']."</td>";
				echo "<td>" . $row['degrees']."</td>";
				echo "<td>" . $row['bmdc_no']."</td>";
				echo "<td>" . $row['phone_no']."</td>";

   
    
    	}
    }

    ?>

 
      
     
  

</div>
</div>