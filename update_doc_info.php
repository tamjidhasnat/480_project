<html>
<div style="background-image: url('bg/bg_create_doc.jpg');">
<?php
    
        session_start();


    
    
		 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
          

    include 'dbconnect.php';  
      
      $first_name= $_POST["f_name"];   
      $last_name=$_POST["l_name"];   
      $working=$_POST["working"]; 
      
      $bmdc_no=$_POST["bmdc"]; 
      $phone_no=$_POST["phone"]; 
     
      

     if (!isset($_POST['degree'])||!isset($_POST['designation'])){
		 echo '<div class="alert alert-danger" role="alert">
  Email Address is already in Database!
</div>';
	
                       
		
}
         $email=$_SESSION["email"];
		 $role=$_SESSION["role"];
		$id=$_SESSION["id"];
		
        if($role == "update") {
			$degree = $_POST["degree"];
 $designation=$_POST["designation"];  
			
			
		$sql2="UPDATE `doctor` SET `first_name` = '$first_name', `last_name` = '$last_name', `currently_working` = '$working', `designation` = '$designation', `degrees` = '$degree', `bmdc_no` = '$bmdc_no', `phone_no` = '$phone_no' WHERE `doctor`.`id` = '$id' AND `doctor`.`email` = '$email'";	

          $result = mysqli_query($conn, $sql2);
		  
		echo '<div class="alert alert-secondary" role="alert">
  Account is Updated!
</div>';
        header('Refresh: 3; URL= http://localhost/480_project/doctor_table.php');
		}
       
          

    }
    ?>




<head>
<meta charset="utf-8">
<meta name="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">


</head>
<div style="background-image: url('bg/bg_create_doc.jpg');">
<div class="container h-10 ">


<div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
		
		
<h1 class="text-center">Update  Doctor Information</h1> 
        <form action="update_doc_info.php" method="post">

<div class="row">
  <div class="col">
    <input type="text" name="f_name" class="form-control" placeholder="First name" aria-label="First name"required>
  </div>
  <div class="col">
    <input type="text"name="l_name" class="form-control" placeholder="Last name" aria-label="Last name"required>
  <br>
  </div>
  
  
<div class="form-floating mb-3">
  <input type="text" name="working" class="form-control" id="floatingInput" placeholder="@medical"required>
  <label for="floatingInput">Currently Working</label>
</div>

  <div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Designation</label>
  <select class="form-select" name="designation" id="inputGroupSelect01"required>
    <option selected>Choose...</option>
    <option value="Assistant professor">Assistant professor</option>
    <option value="Associate professor">Associate professor</option>
    <option value="Professor">Professor</option>
    <option value="Head of dept">Head of dept</option>
  </select>
</div>

<div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
<label class="input-group-text"  for="inputGroupSelect01"required>Degrees</label>
  <input type="radio" class="btn-check" id="btnradio1"name="degree" value="MS " autocomplete="off">
  <label class="btn btn-outline-primary" for="btnradio1">MS</label>

  <input type="radio" class="btn-check" id="btnradio2" name="degree"value="FCPS " autocomplete="off">
  <label class="btn btn-outline-primary" for="btnradio2">FCPS</label>

  <input type="radio" class="btn-check" id="btnradio3"name="degree" value="FRCS " autocomplete="off">
  <label class="btn btn-outline-primary" for="btnradio3">FRCS</label>
  
<input type="radio" class="btn-check" id="btnradio4"name="degree" value="MRCS-surgery " autocomplete="off">
  <label class="btn btn-outline-primary" for="btnradio4">MRCS-surgery</label>
  
<input type="radio" class="btn-check" id="btnradio5" name="degree" value="FRCP " autocomplete="off">
  <label class="btn btn-outline-primary" for="btnradio5">FRCP</label>


</div>

<p>

<div class="form-floating mb-3">
  <input type="text" name="bmdc"class="form-control" id="floatingInput" placeholder="@reg_number" required>
  <label for="floatingInput">BMDC No</label>
</div>

<div class="form-floating mb-3">
  <input type="tel" name="phone" class="form-control" id="floatingInput" placeholder="01234567890" pattern="[0-9]{11}" required>
  <label for="floatingInput">Phone No</label>
</div>

<div class="d-grid gap-2">
  <button type="submit" class="btn btn-outline-secondary">Submit</button>
  </div>

</div>
</form>
</html>