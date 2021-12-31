




<head>
<meta charset="utf-8">
<meta name="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">


</head>
<div style="background-image: url('bg/meds_info.jpg');">
<div class="container h-10 ">


<div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
		
		
<h1 class="text-center">Add  Medicine Information</h1> 
        <form action="add_meds_info.php" method="post">

<div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
  <br>
  </div>
  
   <div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Medicine Type</label>
  <select class="form-select" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="Tablet">Tablet</option>
    <option value="Capsules">Capsules</option>
    <option value="Suppositories">Suppositories</option>
    <option value="Liquid">Liquid</option>
    <option value="Drops">Drops</option>
    <option value="Injections">Injections</option>
  </select>
</div>
  
  <div class="form-floating">
  <textarea class="form-control" placeholder="Indications" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">Indications</label>
</div>
<p>

<div class="form-floating">
  <textarea class="form-control" placeholder="Usage" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">Usage</label>
</div>



<p>

<div class="form-floating">
  <textarea class="form-control" placeholder="Instruction" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">Instruction</label>
</div>
<p>

<div class="d-grid gap-2">
  <button type="submit" class="btn btn-outline-secondary">Submit</button>
  </div>

</div>
</form>