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
 $doctor_name=$_SESSION["doctor_name"];
	echo "<table class='table table-hover table-dark'>";
  echo "<thead>";
   echo" <tr>";
     echo " <th scope='col'>#</th>
      <th scope='col'>First Name</th>
      <th scope='col'>Last Name</th>
      <th scope='col'>Age</th>
	  <th scope='col'>Gender</th>
      <th scope='col'>Patient Complexity(Briefly)</th>
      <th scope='col'>Patient Address No</th>
      <th scope='col'>Phone No</th>
	  <th scope='col'>Assign Doctor</th>
      <th scope='col'>Action</th>";
    echo "</tr>";
    echo "</thead>";

   
    include 'dbconnect.php';  
    $sql="SELECT * FROM `patient`";
    $result=$conn->query($sql);
    if($result->num_rows>0){
    	while ($row=$result->fetch_assoc()){
    echo "<tr>";
				echo "<td>" . $row['id']."</td>";
				echo "<td>" . $row['first_name']."</td>";
				echo "<td>" . $row['last_name']."</td>";
				echo "<td>" . $row['age']."</td>";
				echo "<td>" . $row['gender']."</td>";
				echo "<td>" . $row['patient_data']."</td>";
				echo "<td>" . $row['address']."</td>";
				echo "<td>" . $row['phone']."</td>";
				echo "<td>" . $row['assign_doctor']."</td>";
				echo "<td><a href='update_patient_info.php?role=update&ch=$row[email]' class='btn btn-success' >Edit Info</a><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='delete_doc.php?role=delete_patient&id=$row[id]'  class='btn btn-danger'  >Delete</button><a href='create_pres.php?role=create&ch=$row[email]&id=$row[id]'  ' class='btn btn-info' >Prescribe</a></td>";
   
    $_SESSION["email_patient"]=$row['email'];
	$_SESSION["role"]="update";
	$_SESSION["patient_id"]=$row['id'];
	$_SESSION["doctor_name"]=$doctor_name;
    	}
		
		

    }

    ?>

 
      
     
  

</div>
</div>
</html>