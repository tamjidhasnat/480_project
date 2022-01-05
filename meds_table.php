<html>

<head>
<meta charset="utf-8">
<meta name="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">


</head>
<div class="container h-10 ">
	<div class="row h-100 justify-content-center align-items-center">
<div style="background-image: url('bg/bg_create_doc.jpg');">
<a class="btn btn-dark" href="doc_dash.php" role="button">back to dashboard</a>
 <?php
  session_start();
 
	echo "<table class='table table-hover table-dark'>";
  echo "<thead>";
   echo" <tr>";
     echo " <th scope='col'>#</th>
	 <th scope='col'>Assigned by</th>
      <th scope='col'>Medicine First Name</th>
      <th scope='col'>Medicine Last Name</th>
      <th scope='col'>Indication</th>
	  <th scope='col'>Usage</th>
      <th scope='col'>Instruction</th>
      <th scope='col'>Medicine Type</th>
      <th scope='col'>Action</th>";
    echo "</tr>";
    echo "</thead>";

   
    include 'dbconnect.php';  
    $sql="SELECT * FROM `medicine`";
    $result=$conn->query($sql);
    if($result->num_rows>0){
    	while ($row=$result->fetch_assoc()){
    echo "<tr>";
				echo "<td>" . $row['id']."</td>";
				echo "<td>" . $row['doc_name']."</td>";
				echo "<td>" . $row['meds_first_name']."</td>";
				echo "<td>" . $row['meds_last_name']."</td>";
				echo "<td>" . $row['indication']."</td>";
				echo "<td>" . $row['usage']."</td>";
				echo "<td>" . $row['instruction']."</td>";
				echo "<td>" . $row['meds_type']."</td>";
				echo "<td><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='delete_doc.php?role=delete_meds&id=$row[id]' style='background: #FF0000 ' class='btn btn-info' <button class='btn btn-info' >Delete</button> </td>";
   
   
    	}
    }

    ?>

 
      
     
  

</div>
</div>
</html>