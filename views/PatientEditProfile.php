<?php include 'PatientMenu.php';
	require_once '../controllers/PatientController.php';
	$patient=getPatientById($id);
	$flag='false';
	$new_name=$patient["Name"];
	$new_gender=$patient["Gender"];
	$new_age=$patient["Age"];
	$new_pn=$patient["PhoneNo"];
	$new_email=$patient["Email"];
	$new_credit=$patient["Credit"];
	$new_addr=$patient["Address"];
	$new_photo=$patient["Photo"];
	$new_sp= "";
?>
  	<div class="right">
    	<div class="main" style=color:black>
	        <h2>Edit User Information:</h2>
	        <?php include 'ValidateEditForm.php';?>
        	<div class="container">
        		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data"> 
	        	<div class="one">
	        		ID:<br><br>
	        		Name:<br><br>
	        		Gender:<br><br><br>
	        		Age:<br><br>
	        		Phone No:<br><br>
	        		Email:<br><br>
	        		Address:	        		
	        	</div>
	        	<div class="two">
	        		<?php echo $id;?><br><br>
	        		<input type="text" name="new_name" value="<?php echo $new_name;?>"><br><span><?php echo $nameErr;?></span><br>
	        		<input type="radio" name="new_gender"
					<?php if ($new_gender=="Female") echo "checked";?>
					value="Female">Female
					<input type="radio" name="new_gender"
					<?php if ( $new_gender=="Male") echo "checked";?>
					value="Male">Male<br>
					<input type="radio" name="new_gender"
					<?php if ($new_gender=="Other") echo "checked";?>
					value="Other">Other<br><span><?php echo $genderErr;?></span><br>
	        		<input type="number" name="new_age" value="<?php echo $new_age;?>"><br><span><?php echo $ageErr;?></span><br>	        		
	        		+880<input type="number" name="new_pn" value="<?php echo $new_pn;?>"><br><span><?php echo $pnErr;?></span><br>
	        		<input type="email" name="new_email" value="<?php echo $new_email;?>"><br><span><?php echo $emailErr;?></span><br>
	        		<input type="text" name="new_addr" value="<?php echo $new_addr;?>"><br>
	        	</div>
	        	<div class="three">
	        		<img class="card-image" src="<?php if($new_photo!=Null) echo $new_photo; else echo "../storage/images/no-avatar.png";?>"></img>
	        		<input type="file" name="new_photo">
        		</div>
        	</div>
        	<div class="container">
	        		<div class="one">
	        			<pre> </pre>
	        		</div>
	        		<div class="two">	        			
	        			<pre> </pre>
	        		</div>
	        		<div class="three">
	        			<input type="submit" class="myButton" name="update_patient_profile" value="Update">
	        		</div>
	        	</div>
        </form>

        <?php
        	if($flag=='true'){
        		$new_patient["Id"]=$id;
        		$new_patient["Name"]=$new_name;
        		$new_patient["Gender"]=$new_gender;
        		$new_patient["Age"]=$new_age;
        		$new_patient["PhoneNo"]=$new_pn;
        		$new_patient["Email"]=$new_email;
        		$new_patient["Credit"]=$new_credit;
        		$new_patient["Address"]=$new_addr;
        		$new_patient["Photo"]=$new_photo;

        		updatePatient($new_patient);
        		header("Location:../views/PatientViewProfile.php");
        	}
        ?>
    	</div>
    </div>
  </div>
  <script src="javascript/javascript.js"></script> 
</body>
</html>