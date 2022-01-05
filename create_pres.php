<html>
<div style="background-image: url('bg/bg_pres.jpg');">
<?php

  session_start();
    include 'dbconnect.php';  
$doctor_name=$_SESSION["doctor_name"];
$patient_id=$_SESSION["patient_id"];

$sql="SELECT * FROM `patient` WHERE `id`='$patient_id'";
			$result = mysqli_query($conn, $sql);
			
			
			

$sql_1="SELECT * FROM `medicine` WHERE `doc_name`='$doctor_name'";
			$result_1 = mysqli_query($conn, $sql_1);
		
 if($_SERVER["REQUEST_METHOD"] == "POST") {
		
	 $meds_1= $_POST["medicine_1"];
	 $meds_2= $_POST["medicine_2"];
	 $meds_3= $_POST["medicine_3"];
	 
	 $sql_2="SELECT * FROM `medicine` WHERE `doc_name`='$doctor_name' AND `meds_first_name`+`meds_last_name`='$meds_1'";
			$result_2 = mysqli_query($conn, $sql_2);
	 while ($row = $result_2->fetch_assoc()) {
		 
		 $usage_1=$row['usage'];
		 $type_1=$row['meds_type'];
	 }
	 $sql_3="SELECT * FROM `medicine` WHERE `doc_name`='$doctor_name' AND `meds_first_name`+`meds_last_name`='$meds_2'";
			$result_3 = mysqli_query($conn, $sql_3);
	 while ($row = $result_3->fetch_assoc()) {
		 
		 $usage_2=$row['usage'];
		 $type_2=$row['meds_type'];
	 }
	 $sql_4="SELECT * FROM `medicine` WHERE `doc_name`='$doctor_name' AND `meds_first_name`+`meds_last_name`='$meds_3'";
			$result_4 = mysqli_query($conn, $sql_4);
	 while ($row = $result_4->fetch_assoc()) {
		 
		 $usage_3=$row['usage'];
		 $type_3=$row['meds_type'];
	 }
	 
	 
	 
	 $sql="SELECT * FROM `patient` WHERE `id`='$patient_id'";
			$result = mysqli_query($conn, $sql);
			
			while ($row = $result->fetch_assoc()) {
				
				$first_name=$row['first_name'];
				$last_name=$row['last_name'];
				$age=$row['age'];
				$gender=$row['gender'];
				$address=$row['address'];
				$phone=$row['phone'];
			$full_name=$row['first_name']." ".$row['last_name'];
				
			}
			
			
		require('fpdf/fpdf.php');
		ob_end_clean();
		$title='Prescription';
		$pdf=new FPDF();
		$pdf ->AddPage();
		$pdf ->SetTitle($title);
		$pdf ->SetFont('Arial','B',15);
		$w=$pdf->GetStringWidth($title)+6;
		$pdf ->SetX((210-$w)/2);
		$pdf ->SetDrawColor(221,221,221,1);
		$pdf ->SetFillColor(10,158,0,1);
		$pdf ->SetTextColor(0,0,0,1);
		$pdf ->SetLineWidth(1);
		$pdf ->Cell($w,9,$title,1,1,'C',true);
		
		$date=date("Y-m-d");
		
		$pdf->Cell(25 ,5,'Date',0,0);
		$pdf->Cell(34 ,5,$date,0,1);
		
		
		
		$pdf->Cell(189 ,10,'',0,1);//end of line

//billing address
$pdf->Cell(100 ,5,'Patient Info',0,1);//end of line

//add dummy cell at beginning of each line for indentation
$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,$full_name,0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'Age:'.$age,0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'Gender:'.$gender,0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'Address:'.$address,0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'Phone:'.$phone,0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130 ,5,'Prescribed Medicine',0,0);
$pdf->Cell(25 ,5,'Type',0,0);
$pdf->Cell(34 ,5,'Usage',0,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter

$pdf->Cell(130 ,5,$meds_1,0,0);
$pdf->Cell(25 ,5,$type_1,0,0);
$pdf->Cell(34 ,5,$usage_1,0,1);//end of line

$pdf->Cell(130 ,5,$meds_2,0,0);
$pdf->Cell(25 ,5,$type_2,0,0);
$pdf->Cell(34 ,5,$usage_2,0,1);//end of line

$pdf->Cell(130 ,5,$meds_3,0,0);
$pdf->Cell(25 ,5,$type_3,0,0);
$pdf->Cell(34 ,5,$usage_3,0,1);//end of line


$pdf->Cell(189 ,10,'',0,1);//end of line

$pdf->Cell(130 ,5,'Prescribed By:',0,1);
$pdf->Cell(05 ,5,$doctor_name,0,0);

		
	    $pdf -> Output();
	

ob_end_flush(); 


	
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
		
		
<h1 class="text-center">Prescription</h1> 
        <form action="create_pres.php" method="post">


 
<div class="input-group mb-3">


<label class="input-group-text" for="inputGroupSelect01">medicine</label>
  <select class="form-select" name="medicine_1" id="inputGroupSelect01"required>
    
	
	<option value="" >Choose...</option>
    
	<?php			
			while ($row = $result_1->fetch_array()) {
				
				
			
?>
	<option value="<?php echo $row['meds_first_name']." ".$row['meds_last_name']?>"><?php echo $row['meds_first_name']." ".$row['meds_last_name'] ?> </option>


<?php
			}
			
			?>
 </select>
 
</div>

<?php
    include 'dbconnect.php';  

$sql_1="SELECT * FROM `medicine` WHERE `doc_name`='$doctor_name'";
			$result_1 = mysqli_query($conn, $sql_1);
			
				
?>	

<div class="input-group mb-3">


<label class="input-group-text" for="inputGroupSelect01">medicine</label>
  <select class="form-select" name="medicine_2" id="inputGroupSelect01">
    
	
	<option value="" >Choose...</option>
    
	<?php			
			while ($row = $result_1->fetch_array()) {
				
				
			
?>
	<option value="<?php echo $row['meds_first_name']." ".$row['meds_last_name']?>"><?php echo $row['meds_first_name']." ".$row['meds_last_name'] ?> </option>


<?php
			}
			
			?>
 </select>
 
</div>


<?php
    include 'dbconnect.php';  

$sql_1="SELECT * FROM `medicine` WHERE `doc_name`='$doctor_name'";
			$result_1 = mysqli_query($conn, $sql_1);
			
				
?>	
<div class="input-group mb-3">


<label class="input-group-text" for="inputGroupSelect01">medicine</label>
  <select class="form-select" name="medicine_3" id="inputGroupSelect01">
    
	
	<option value="" >Choose...</option>
    
	<?php			
			while ($row = $result_1->fetch_array()) {
				
				
			
?>
	<option value="<?php echo $row['meds_first_name']." ".$row['meds_last_name']?>"><?php echo $row['meds_first_name']." ".$row['meds_last_name'] ?> </option>


<?php
			}
			
			?>
 </select>
 
</div>


<button type="submit" class="btn btn-secondary">Generate Prescription</button>
<a class="btn btn-secondary" href="patient_table.php" role="button">Back To The Table</a>
</div>
</form>

</html>