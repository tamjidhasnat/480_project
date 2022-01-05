<?php

include 'dbconnect.php'; 
 
 $id=$_GET['id'];
 $email=$_GET['email'];
 $role=$_GET['role'];
 if ($role=="delete"){
	
	$sql="DELETE FROM `doctor` WHERE `doctor`.`id` = '$id' AND `doctor`.`email` = '$email'";
	
	$result = mysqli_query($conn, $sql);
	header("Location: http://localhost/480_project/doctor_table.php");
			exit();
	
	
}
else if($role=="delete_patient"){
	$sql2="DELETE FROM `patient` WHERE `patient`.`id` = '$id'";
	
	$result = mysqli_query($conn, $sql2);
	header("Location: http://localhost/480_project/patient_table.php");
			exit();
	
	
}
else if($role=="delete_meds"){
	$sql2="DELETE FROM `medicine` WHERE `medicine`.`id` = '$id'";
	
	$result = mysqli_query($conn, $sql2);
	header("Location: http://localhost/480_project/meds_table.php");
			exit();
	
	
}

?>