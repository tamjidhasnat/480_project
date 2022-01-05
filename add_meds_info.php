<html>
<div style="background-image: url('bg/meds_info.jpg');">
<?php
    
        session_start();


    
        
    if($_SERVER["REQUEST_METHOD"] == "POST") {
          

    include 'dbconnect.php';  
    	
				
				$email_doctor=$_SESSION["email"];
				
				
				$meds_f_name= $_POST["f_name"];
				$meds_l_name= $_POST["l_name"];
				
				
				$indication= $_POST["indication"];
				$usage= $_POST["usage"];
				$instruction= $_POST["instruction"];
				
			$sql_1="SELECT  `first_name`, `last_name` FROM `doctor` WHERE `email`='$email_doctor'";
			$result_1 = mysqli_query($conn, $sql_1);
			while ($row = $result_1->fetch_assoc()) {
				
				$doctor_name=$row['first_name']." ".$row['last_name'];
				
				
			}
			
			 	
				
    		if ($_POST['medicine_type']==null){
				echo '<div class="alert alert-danger" role="alert">
			Medicine Type can\'t be null!
				</div>';
			}
			
			
			
			
			else {
				$medicine_type= $_POST["medicine_type"];
				
				$sql2="INSERT INTO `medicine` (`doc_name`, `meds_first_name`, `meds_last_name`, `indication`, `usage`, `instruction`, `meds_type`, `date`) VALUES ('$doctor_name', '$meds_f_name', '$meds_l_name', '$indication', '$usage', '$instruction', '$medicine_type', current_timestamp());";


          $result = mysqli_query($conn, $sql2);
				
				
				echo '<div class="alert alert-success" role="alert">
  Medicine data successfully Added!
</div>';
 header('Refresh: 3; URL= http://localhost/480_project/doc_dash.php');
				
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
		
		
<h1 class="text-center">Add  Medicine Information</h1> 
        <form action="add_meds_info.php" method="post">

<div class="row">
  <div class="col">
    <input type="text" name="f_name" class="form-control" placeholder="First name" aria-label="First name" required>
  </div>
  <div class="col">
    <input type="text" name="l_name" class="form-control" placeholder="Last name" aria-label="Last name">
  <br>
  </div>
  
   <div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Medicine Type</label>
  <select class="form-select" name="medicine_type" id="inputGroupSelect01"required>
    <option value="" selected>Choose...</option>
    <option value="Tablet">Tablet</option>
    <option value="Capsules">Capsules</option>
    <option value="Suppositories">Suppositories</option>
    <option value="Liquid">Liquid</option>
    <option value="Drops">Drops</option>
    <option value="Injections">Injections</option>
  </select>
</div>
  
  <div class="form-floating">
  <textarea class="form-control" name="indication" placeholder="Indications" id="floatingTextarea"required></textarea>
  <label for="floatingTextarea">Indications</label>
</div>
<p>

<div class="form-floating">
  <textarea class="form-control" name="usage" placeholder="Usage" id="floatingTextarea"required></textarea>
  <label for="floatingTextarea">Usage</label>
</div>



<p>

<div class="form-floating">
  <textarea class="form-control" name="instruction" placeholder="Instruction" id="floatingTextarea"required></textarea>
  <label for="floatingTextarea">Instruction</label>
</div>
<p>

<div class="d-grid gap-2">
  <button type="submit" class="btn btn-outline-secondary">Submit</button>
  </div>

</div>
</form>
</html>