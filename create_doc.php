<?php
    
        session_start();


    $showError = false;   
        
    if($_SERVER["REQUEST_METHOD"] == "POST") {
          

    include 'dbconnect.php';  
      $email = $_POST["email"];  
     
      $degree = $_POST["degree"];
      $sql="";


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
		
		
<h1 class="text-center">Add  Doctor Information</h1> 
        <form action="create_doc.php" method="post">

<div class="row">
  <div class="col">
    <input type="text" name="f_name" class="form-control" placeholder="First name" aria-label="First name"required>
  </div>
  <div class="col">
    <input type="text"name="l_name" class="form-control" placeholder="Last name" aria-label="Last name"required>
  <br>
  </div>
  
  <div class="form-floating mb-3">
  <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com"required>
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating mb-3">
  <input type="text" name="working" class="form-control" id="floatingInput" placeholder="@medical"required>
  <label for="floatingInput">Currently Working</label>
</div>

  <div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Designation</label>
  <select class="form-select" name="designation" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="Assistant professor">Assistant professor</option>
    <option value="Associate professor">Associate professor</option>
    <option value="Professor">Professor</option>
    <option value="Head of dept">Head of dept</option>
  </select>
</div>

<div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
<label class="input-group-text"  for="inputGroupSelect01">Degrees</label>
  <input type="checkbox" class="btn-check" id="btncheck1"name="degree" value="MS " autocomplete="off"required>
  <label class="btn btn-outline-primary" for="btncheck1">MS</label>

  <input type="checkbox" class="btn-check" id="btncheck2" name="degree"value="FCPS " autocomplete="off">
  <label class="btn btn-outline-primary" for="btncheck2">FCPS</label>

  <input type="checkbox" class="btn-check" id="btncheck3"name="degree" value="FRCS " autocomplete="off">
  <label class="btn btn-outline-primary" for="btncheck3">FRCS</label>
  
<input type="checkbox" class="btn-check" id="btncheck4"name="degree" value="MRCS-surgery " autocomplete="off">
  <label class="btn btn-outline-primary" for="btncheck4">MRCS-surgery</label>
  
<input type="checkbox" class="btn-check" id="btncheck5" name="degree" value="FRCP " autocomplete="off">
  <label class="btn btn-outline-primary" for="btncheck5">FRCP</label>


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