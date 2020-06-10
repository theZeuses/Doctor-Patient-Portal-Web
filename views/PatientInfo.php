<?php include 'DoctorMenu.php';
	require_once '../controllers/PatientController.php';
	$pid=$_GET["pid"];
	$patient=getPatientById($pid);
	$type=$_GET["type"];
	if($type=="x"){
		session_start();
		$backLink="ManageSlot.php?sid=".$_SESSION["stored_sid"];
	}
	else if($type=="y"){
		$backLink="AllPatient.php";	
	}
?>
  	<div class="right">
    	<div class="main" style=color:black>
    		<div class="container">
	        	<div class="one">
	        		<h2>Patient Info</h2>
	        	</div>
	        	<div class="two">
	        		<pre> </pre>
	        	</div>
	        	<div class="three" align="right">
	        		<br>
	        		<a href="PatientMedicalHistory.php?pid=<?php echo $pid; ?>&type=<?php echo $type; ?>"><div class='myButton'>History</div></a>
	        	</div>
	        </div>
        	<div class="container">
	        	<div class="one">
	        		<h3 style=color:blue>ID:</h3>
	        		<h3 style=color:blue>Name:</h3>
	        		<h3 style=color:blue>Gender:</h3>
	        		<h3 style=color:blue>Age:</h3>
	        		<h3 style=color:blue>Credit:</h3>
	        		<h3 style=color:blue>Phone No:</h3>
	        		<h3 style=color:blue>Email:</h3>
	        		<h3 style=color:blue>Address:</h3>	        		
	        	</div>
	        	<div class="two">
	        		<h4><?php echo $pid; ?></h4>
	        		<h4><?php echo $patient["Name"]; ?></h4>
	        		<h4><?php echo $patient["Gender"]; ?></h4>
	        		<h4><?php echo $patient["Age"]; ?></h4>
	        		<h4><?php echo $patient["Credit"]; ?></h4>
	        		<h4>+880<?php echo $patient["PhoneNo"]; ?></h4>
	        		<h4><?php echo $patient["Email"]; ?></h4>
	        		<h4><?php echo $patient["Address"]; ?></h4>
	        	</div>
	        	<div class="three">
	        		<img class="card-image" src="<?php if($patient["Photo"]!=Null) echo $patient["Photo"]; else echo "../storage/images/no-avatar.png";?>"></img>
        		</div>
        	</div>
        	<div class="container">
	        	<div class="one">
	        		<a href="<?php echo $backLink; ?>"><div class='myButton'>Back</div></a>
	        	</div>
	        	<div class="two">
	        		<pre> </pre>
	        	</div>
	        	<div class="three" align="right">
	        	</div>
	        </div>
    	</div>
    </div>
  </div>
  <script src="javascript/javascript.js"></script> 
</body>
</html>