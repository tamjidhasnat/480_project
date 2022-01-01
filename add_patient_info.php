

//assign doctor name


<head>
<meta charset="utf-8">
<meta name="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">


</head>
<div style="background-image: url('bg/bg_create_doc.jpg');">
<div class="container h-10 ">


<div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
		
		
<h1 class="text-center">Add  Patient Information</h1> 
        <form action="create_doc.php" method="post">

<div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="Patient First name" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Patient Last name" aria-label="Last name">
  <br>
  </div>
   <div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
 
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="@Age">
  <label for="floatingInput">Age</label>
</div>

  <div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Gender</label>
  <select class="form-select" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="Assistant professor">Male</option>
    <option value="Associate professor">Female</option>
    
  </select>
</div>

  <div class="form-floating">
  <textarea class="form-control" placeholder="Address" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">Address</label>
</div>





<p>

<div class="form-floating">
  <textarea class="form-control" placeholder="Address" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">What Complication Patient facing?</label>
</div>

<p>
<div class="form-floating mb-3">
  <input type="tel" class="form-control" id="floatingInput" placeholder="01234567890" pattern="[0-9]{11}" required>
  <label for="floatingInput">Phone No</label>
</div>

<div class="d-grid gap-2">
  <button type="submit" class="btn btn-outline-secondary">Submit</button>
  </div>

</div>
</form>