<?php
	require_once '../models/database.php';
	function insertHistory($pid,$photo){
		$date=date("Y-m-d");
		$query="INSERT INTO history(date,pid,photo) VALUES('$date',$pid,'$photo')";
		execute($query);
		header("Location:../views/AllPatient_Assistant.php");
	}
	function getHistoryByPid($pid){
		$query="SELECT * FROM history WHERE pid=$pid";
		$hist=get($query);
		return $hist;
	}
?>