<html>
<div style="background-image: url('bg/bg_create_doc.jpg');">
<?php
    
        session_start();


    $id = $_SESSION["id"];
		$email=$_SESSION["email"];
		
    
		 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
          

    include 'dbconnect.php';  
      
      $password= $_POST["password"];   
  
      $hash = password_hash($password, 
    									PASSWORD_DEFAULT);

		
			
		
			
			
		$sql2="UPDATE `doctor` SET `password` = '$hash' WHERE `doctor`.`id` = '$id' AND `doctor`.`email` = '$email'";	

          $result = mysqli_query($conn, $sql2);
		  
		echo '<div class="alert alert-secondary" role="alert">
  Password is Updated!
	</div>';
        header('Refresh: 3; URL= http://localhost/480_project/doc_dash.php');
		
       
          

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
		
		
<h1 class="text-center text">Update Password</h1> 
        <form action="change_password.php" method="post">


<div class="form-floating">
  <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">New Password</label>
  <br>

  <div class="d-grid gap-2">
  <button type="submit" class="btn btn-outline-primary">Update</button>
  </div>
  
  
  
</div>
</div>
</div>
</div>
</html>