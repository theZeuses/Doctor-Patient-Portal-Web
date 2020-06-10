<?php
	require_once '../controllers/SlotController.php';
  	$sid=$_GET["sid"];
  	$update=$_GET["update"];

  	$slot=getSlotById($sid);

  	$slot["availability"]=$update;

  	updateSlot($slot);

  	header("Location:ManageSlot.php?sid=$sid");
  	exit();
?>