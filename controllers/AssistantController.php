<?php
	require_once '../models/database.php';
	if(isset($_POST["create_assistant"]))
	{
		createAssistant();
	}

	else if(isset($_POST["update_assistant"]))
	{
		updateAssistant();
	}
	function getAllAssistants()
	{
		$query ="SELECT * FROM assistants";
		$assistants = get($query);
		return $assistants;	
	}
	function getAssistantById($id)
	{
		$query ="SELECT * FROM assistants WHERE Id=$id";
		$assistants = get($query);
		return $assistants[0];
		
	}
	function getAssistantByName($name)
	{
		$query ="SELECT * FROM assistants WHERE name=$name";
		$assistants = get($query);
		return $assistants;
		
	}
	
	function createAssistant()
	{
		
	}
	function updateAssistant($assistant)
	{
		$id=$assistant["Id"];
		$new_name=$assistant["Name"];
		$new_gender=$assistant["Gender"];
		$new_age=$assistant["Age"];
		$new_pn=$assistant["PhoneNo"];
		$new_email=$assistant["Email"];
		$new_photo=$assistant["Photo"];
		$query="UPDATE assistants SET Name='$new_name',Gender='$new_gender',Age=$new_age,PhoneNo='$new_pn',Email='$new_email',Photo='$new_photo' WHERE Id=$id";
		execute($query);
		header("Location:../views/AssistantViewProfile.php");
		
	}
	function success(){
		echo '<script language="javascript">';
        echo 'alert("Slot Created Successfully")';
        echo '</script>';
	}
?>