<?php
	require_once '../controllers/SlotController.php';
	require_once '../controllers/PatientController.php';
  	$sid=$_GET["sid"];
  	session_start();
  	$id=$_SESSION["logged_in_id"];

  	$patient=getPatientById($id);

  	$credit=$patient["Credit"]+500;

  	$patient["Credit"]=$credit;


  	$slot=getSlotById($sid);

  	$slot["availability"]="Unavailable";
  	$slot["pid"]=$id;

  	updateSlot($slot);
  	updatePatient($patient);

  	header("Location:CancelSlot.php");
  	exit();
?>