<html>
<div style="background-image: url('bg/bg.jpg');">

    <?php
    
        session_start();


    
        
    if($_SERVER["REQUEST_METHOD"] == "POST") {
          

    include 'dbconnect.php';  
    	$email = $_POST["email"];  
    	$password = $_POST["password"];
    	$sql = "Select * from doctor where email='$email'";
        
        $result = mysqli_query($conn, $sql);
       
        $num = mysqli_num_rows($result); 
    	
    	if ($num<1){
    		echo '<div class="alert alert-danger" role="alert">
  User not found!
</div> '; 
    		
    	}
    	else{
    		
    		$sql2= "Select email,password,id from doctor where email='$email'";
    		
    		$result = mysqli_query($conn, $sql2);
    		while ($row = $result->fetch_assoc()) {
				 $_SESSION["id"]=$row['id'];
				 $_SESSION["email"]=$row['email'];
				
				
				
    			if (password_verify( $password,$row['password'])) {
					
					
					
						
					 header("Location: http://localhost/480_project/doc_dash.php");
                       exit();
					
				
				
    			}
    			else{
    				echo '<div class="alert alert-danger" role="alert">
  Email or password is incorrect!
</div> '; 
    			}
    			    

    }
    		
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
		
		
<h1 class="text-center text-white">Login</h1> 
        <form action="login.php" method="post">

<div class="form-floating mb-3">
  <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Password</label>
  <br>
  <div class="d-grid gap-2">
  <button type="submit" class="btn btn-outline-primary">Log In</button>
  </div>
  
  
  
</div>
</div>
</div>
</div>
</html>