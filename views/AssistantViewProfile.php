<?php include 'AssistantMenu.php';
	require_once '../controllers/AssistantController.php';
	$Assistant=getAssistantById($id);
?>
  	<div class="right">
    	<div class="main" style=color:black>
	        <h2><?php echo $Assistant["Name"]; ?></h2>
        	<div class="container">
	        	<div class="one">
	        		<h3 style=color:blue>ID:</h3>
	        		<h3 style=color:blue>Gender:</h3>
	        		<h3 style=color:blue>Age:</h3>
	        		<h3 style=color:blue>Phone No:</h3>
	        		<h3 style=color:blue>Email:</h3>
	        		<h3 style=color:blue>Salary:</h3>	        		
	        	</div>
	        	<div class="two">
	        		<h4><?php echo $id; ?></h4>
	        		<h4><?php echo $Assistant["Gender"]; ?></h4>
	        		<h4><?php echo $Assistant["Age"]; ?></h4>
	        		<h4>+880<?php echo $Assistant["PhoneNo"]; ?></h4>
	        		<h4><?php echo $Assistant["Email"]; ?></h4>
	        		<h4><?php echo $Assistant["Salary"]; ?></h4>
	        	</div>
	        	<div class="three">
	        		<img class="card-image" src="<?php if($Assistant["Photo"]!=Null) echo $Assistant["Photo"]; else echo "../storage/images/no-avatar.png";?>"></img>
        		</div>
        	</div>
    	</div>
    </div>
  </div>
  <script src="javascript/javascript.js"></script> 
</body>
</html>