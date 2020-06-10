 <?php

	$q = $_REQUEST["q"];
	$pid = $_REQUEST["pid"];

	$hint = "";

	if ($q !== "p") {
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "portal";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM history WHERE date='$q' AND pid='$pid'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
	    	// output data of each row
	    	while($row = $result->fetch_assoc()) {
	        	$hint=$hint .'<img src="'.$row["photo"].'">';
	    	}
		}
		$conn->close();
	
	}
	else{
		$hint="No Data Found";
	}
	echo $hint;
?> 