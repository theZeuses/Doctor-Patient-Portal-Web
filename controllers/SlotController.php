<?php
	require_once '../models/database.php';
	if(isset($_POST["create_slots"]))
	{
		createSlots();
	}
	else if(isset($_POST["book_slot"]))
	{
		updateSlot();
	}
	else if(isset($_POST["cancel_slot"]))
	{
		updateSlot();
	}
	else if(isset($_POST["update_slot"]))
	{
		updateSlot();
	}
	function getAllSlots()
	{
		$query ="SELECT * FROM slots";
		$slots = get($query);
		return $slots;	
	}
	function getSlotById($sid)
	{
		$query="SELECT * FROM slots WHERE id=$sid";
		$slots=get($query);
		return $slots[0];
		
	}
	function getSlotBypid($pid)
	{
		$query="SELECT * FROM slots WHERE pid=$pid";
		$slots=get($query);
		return $slots;
		
	}
	function getSlotBydid($did)
	{
		$query="SELECT * FROM slots WHERE did=$did";
		$slots=get($query);
		return $slots;
		
	}
	function getSlotBydate($date)
	{
		$query="SELECT * FROM slots WHERE date='$date'";
		$slots=get($query);
		return $slots;
		
	}
	function getAvailableSlotBydate($date)
	{
		$query="SELECT * FROM slots WHERE date='$date' and availability='Available'";
		$slots=get($query);
		return $slots;
		
	}
	function createSlots()
	{
		$date=$_GET["date"];
		$loop=$_POST['Slot'];
		foreach($loop as $slot){
			$query="INSERT INTO slots(time,date,price) VALUES('$slot','$date',500)";
			execute($query);
		}
		header("Location:../views/DoctorSelectDateToCreate.php");
		
	}
	function updateSlot($slot)
	{
		$id=$slot["id"];
		$time=$slot["time"];
		$date=$slot["date"];
		$pid=$slot["pid"];
		$price=$slot["price"];
		$availability=$slot["availability"];

		$query="UPDATE slots SET time='$time',date='$date',pid=$pid,price=$price,availability='$availability' WHERE id=$id";
		execute($query);
	}

?>