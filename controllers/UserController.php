<?php
	require_once '../models/database.php';
	function getUserById($id){
		$query ="SELECT * FROM users WHERE id=$id";
		$users = get($query);
		return $users[0];
	}
	function validateUser($id,$pass){
		$query ="SELECT * FROM users WHERE id=$id AND password='$pass'";
		$users = get($query);
		return $users[0];
	}
	function insertUser($user){
		$pass=$user["password"];
		$id=$user["id"];
		$type=$user["type"];
		$query="insert into users values($id,'$pass',$type)";
		execute($query);
	}
	function updateUser($user){
		$pass=$user["password"];
		$id=$user["id"];
		$query="UPDATE users SET password='$pass' WHERE id=$id";
		execute($query);
	}
?>