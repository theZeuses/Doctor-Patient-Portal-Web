<?php include 'DoctorMenu.php';
	require_once '../controllers/DoctorController.php';
	$doctor=getDoctorById($id);
?>
  	<div class="right">
    	<div class="main" style=color:black>
	        <h2><?php echo $doctor["Name"]; ?></h2>
        	<div class="container">
	        	<div class="one">
	        		<h3 style=color:blue>ID:</h3>
	        		<h3 style=color:blue>Gender:</h3>
	        		<h3 style=color:blue>Age:</h3>
	        		<h3 style=color:blue>Phone No:</h3>
	        		<h3 style=color:blue>Email:</h3>
	        		<h3 style=color:blue>Spetiality:</h3>	        		
	        	</div>
	        	<div class="two">
	        		<h4><?php echo $id; ?></h4>
	        		<h4><?php echo $doctor["Gender"]; ?></h4>
	        		<h4><?php echo $doctor["Age"]; ?></h4>
	        		<h4>+880<?php echo $doctor["PhoneNo"]; ?></h4>
	        		<h4><?php echo $doctor["Email"]; ?></h4>
	        		<h4><?php echo $doctor["Spetiality"]; ?></h4>
	        	</div>
	        	<div class="three">
	        		<img class="card-image" src="<?php if($doctor["Photo"]!=Null) echo $doctor["Photo"]; else echo "../storage/images/no-avatar.png";?>"></img>
        		</div>
        	</div>
    	</div>
    </div>
  </div>
  <script src="javascript/javascript.js"></script> 
</body>
</html>