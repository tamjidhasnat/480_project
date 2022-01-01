
<head>
<meta charset="utf-8">
<meta name="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">


</head>
<div style="background-image: url('bg/bg_pres.jpg');">
<div class="container h-10 ">


<div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
		
		
<h1 class="text-center">Prescription</h1> 
        <form action="create_doc.php" method="post">

<div class="row">
<div id="survey_options">
  <div class="col">
    <input type="text" name="survey_options[]" class="form-control" placeholder="Medicine name" aria-label="meds name">
  </div>
  <div class="col">
    <input type="text" name="survey_options[]" class="form-control" placeholder="Medicine Type" aria-label="meds type">
  <br>
  </div>
 
</div>
 <div class="controls">
 <a id="add_more_fields" class="btn btn-primary" href="#" role="button">Add Medicine</a>
 <a id="remove_fields" class="btn btn-secondary" href="#" role="button">Remove Medicine</a>
     
    </div>
</div>
</form>

<script src="script.js"></script>