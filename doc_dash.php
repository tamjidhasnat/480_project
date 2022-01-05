<html>
<div style="background-image: url('bg/patient.jpg');">
<?php
    
        session_start();


    
        
   
          

    include 'dbconnect.php';  
    	
				 $id = $_SESSION["id"];
				 $email=$_SESSION["email"];
				
				
			$sql_1="SELECT  `first_name`, `last_name` FROM `doctor` WHERE `email`='$email'";
			$result_1 = mysqli_query($conn, $sql_1);
			while ($row = $result_1->fetch_assoc()) {
				
				$doctor_name=$row['first_name']." ".$row['last_name'];
				
				$_SESSION["doctor_name"]=$doctor_name;
				
			}	
    		
    	



    ?>




<head>
<meta charset="utf-8">
<meta name="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">


</head>




<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Doctor Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="update_doc_info.php">Update Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="change_password.php">Change Password</a>
        </li>
        <li class="nav-item">
         <a class="btn btn-danger" href="homepage.php" role="button">Logout</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>

<div class="container h-10 ">


<div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
		
		
		
		 <div class="col text-center">
		 

<br>
		 <a href="add_patient_info.php" class="btn btn-secondary" role="button" data-bs-toggle="button">Add patient Information</a>
		 <a href="patient_table.php" class="btn btn-secondary" role="button" data-bs-toggle="button">Patient List</a>
		 <a href="add_meds_info.php" class="btn btn-secondary" role="button" data-bs-toggle="button">Add Medicine Info</a>
		 <a href="meds_table.php" class="btn btn-secondary" role="button" data-bs-toggle="button">Medicine List</a>
		 </div>


</div>
</div>	
