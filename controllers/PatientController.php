<?php
	require_once '../models/database.php';
	if(isset($_POST["create_patient"]))
	{
		createPatient();
	}

	else if(isset($_POST["update_patient"]))
	{
		updatePatient();
	}
	function getAllPatients()
	{
		$query ="SELECT * FROM patients";
		$patients = get($query);
		return $patients;	
	}
	function getPatientById($id)
	{
		$query ="SELECT * FROM patients WHERE Id=$id";
		$patients = get($query);
		return $patients[0];
		
	}
	function getPatientByName($name)
	{
		$query ="SELECT * FROM patients WHERE name=$name";
		$patients = get($query);
		return $patients;
		
	}

	function nextPatientId(){
		$query='SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE table_schema="portal" and TABLE_NAME="patients"';
		$increment=get($query);
		return $increment[0];
	}
	
	function createPatient($patient)
	{
		$Name=$patient["Name"];
        $Email=$patient["Email"];
        $Gender=$patient["Gender"];
        $Age=$patient["Age"];
		$PhoneNumber=$patient["PhoneNo"];
        $Address=$patient["Address"];
		$query="INSERT INTO patients(Name,Email,Gender,Age,Credit,PhoneNo,Address) VALUES('$Name','$Email','$Gender',$Age,0,'$PhoneNumber','$Address')";
		execute($query);	
	}
	function updatePatient($patient)
	{
		$id=$patient["Id"];
		$new_name=$patient["Name"];
		$new_gender=$patient["Gender"];
		$new_age=$patient["Age"];
		$new_pn=$patient["PhoneNo"];
		$new_email=$patient["Email"];
		$new_credit=$patient["Credit"];
		$new_addr=$patient["Address"];
		$new_photo=$patient["Photo"];
		$query="UPDATE patients SET Name='$new_name',Gender='$new_gender',Age=$new_age,PhoneNo='$new_pn',Credit=$new_credit, Email='$new_email',Photo='$new_photo',Address='$new_addr' WHERE Id=$id";
		execute($query);
		
	}
?>