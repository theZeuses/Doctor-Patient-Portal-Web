<?php
	require_once '../models/database.php';
	if(isset($_POST["create_doctor"]))
	{
		createDoctor();
	}

	else if(isset($_POST["update_doctor"]))
	{
		updateDoctor();
	}
	function getAllDoctors()
	{
		$query ="SELECT * FROM doctors";
		$doctors = get($query);
		return $doctors;	
	}
	function getDoctorById($id)
	{
		$query ="SELECT * FROM doctors WHERE id=$id";
		$doctors = get($query);
		return $doctors[0];
		
	}
	function getDoctorByName($name)
	{
		$query ="SELECT * FROM doctors WHERE name=$name";
		$doctors = get($query);
		return $doctors;
		
	}
	
	function createDoctor()
	{
		
	}
	function updateDoctor($doctor)
	{
		$id=$doctor["Id"];
		$new_name=$doctor["Name"];
		$new_gender=$doctor["Gender"];
		$new_age=$doctor["Age"];
		$new_pn=$doctor["PhoneNo"];
		$new_email=$doctor["Email"];
		$new_sp=$doctor["Spetiality"];
		$new_photo=$doctor["Photo"];
		$query="UPDATE doctors SET Name='$new_name',Gender='$new_gender',Age=$new_age,PhoneNo='$new_pn',Email='$new_email',Photo='$new_photo',Spetiality='$new_sp' WHERE Id=$id";
		execute($query);
		header("Location:../views/DoctorViewProfile.php");
	}
	function success(){
		echo '<script language="javascript">';
        echo 'alert("Slot Created Successfully")';
        echo '</script>';
	}
?>