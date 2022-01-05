<html>
<div style="background-image: url('bg/bg_create_doc.jpg');">
<?php
    
        session_start();


    
        
    if($_SERVER["REQUEST_METHOD"] == "POST") {
          

    include 'dbconnect.php';  
    	
				$patient_id=$_SESSION["patient_id"];
				
				$patient_role=$_SESSION["role"];
				
				$patient_f_name= $_POST["f_name"];
				$patient_l_name= $_POST["l_name"];
				
				$patient_age= $_POST["age"];
				$patient_address= $_POST["address"];
				$patient_data= $_POST["patient_data"];
				$patient_phone= $_POST["phone"];
				
			
			
			 	
				
    		if ($_POST['gender']==null){
				echo '<div class="alert alert-danger" role="alert">
			Gender can\'t be null!
				</div>';
			}
			
			
			
			
			else if ($patient_role=="update") {
				$gender=$_POST['gender'];
				
				$sql2="UPDATE `patient` SET `first_name` = '$patient_f_name', `last_name` = '$patient_l_name', `age` = '$patient_age', `address` = '$patient_address', `gender` = '$gender', `patient_data` = '$patient_data', `phone` = '$patient_phone' WHERE `patient`.`id` =$patient_id";


          $result = mysqli_query($conn, $sql2);
				
				
				echo '<div class="alert alert-success" role="alert">
  Patient data successfully updated!
</div>';
 header('Refresh: 3; URL= http://localhost/480_project/patient_table.php');
				
			}
			
			
    	


    }
    ?>





<head>
<meta charset="utf-8">
<meta name="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">


</head>

<div class="container h-10 ">


<div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
		
		
<h1 class="text-center">Update  Patient Information</h1> 
        <form action="update_patient_info.php" method="post">

<div class="row">
  <div class="col">
    <input type="text" class="form-control" name="f_name" placeholder="Patient First name" aria-label="First name"required>
  </div>
  <div class="col">
    <input type="text" class="form-control" name="l_name" placeholder="Patient Last name" aria-label="Last name"required>
  <br>
  </div>
 
 
<div class="form-floating mb-3">
  <input type="text" class="form-control" name="age" id="floatingInput" placeholder="@Age"required>
  <label for="floatingInput">Age</label>
</div>

  <div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Gender</label>
  <select class="form-select" name="gender" id="inputGroupSelect01"required>
    <option value="" selected>Choose...</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
    
  </select>
</div>

  <div class="form-floating">
  <textarea class="form-control" name="address" placeholder="Address" id="floatingTextarea"required></textarea>
  <label for="floatingTextarea">Address</label>
</div>





<p>

<div class="form-floating">
  <textarea class="form-control" name="patient_data" placeholder="complication" id="floatingTextarea"required></textarea>
  <label for="floatingTextarea">What Complication Patient facing?</label>
</div>

<p>
<div class="form-floating mb-3">
  <input type="tel" class="form-control" name="phone" id="floatingInput" placeholder="01234567890" pattern="[0-9]{11}" required>
  <label for="floatingInput">Phone No</label>
</div>

<div class="d-grid gap-2">
  <button type="submit" class="btn btn-outline-secondary">Submit</button>
  </div>

</div>
</form>
</html>