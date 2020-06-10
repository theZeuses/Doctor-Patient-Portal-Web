<?php include 'AssistantMenu.php';
	require_once '../controllers/AssistantController.php';
	$Assistant=getAssistantById($id);
	$flag='false';
	$new_name=$Assistant["Name"];
	$new_gender=$Assistant["Gender"];
	$new_age=$Assistant["Age"];
	$new_pn=$Assistant["PhoneNo"];
	$new_email=$Assistant["Email"];
	$new_addr="";
	$new_photo=$Assistant["Photo"];
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
	        			<input type="submit" class="myButton" name="update_Assistant_profile" value="Update">
	        		</div>
	        	</div>
        </form>

        <?php
        	if($flag=='true'){
        		$new_Assistant["Id"]=$id;
        		$new_Assistant["Name"]=$new_name;
        		$new_Assistant["Gender"]=$new_gender;
        		$new_Assistant["Age"]=$new_age;
        		$new_Assistant["PhoneNo"]=$new_pn;
        		$new_Assistant["Email"]=$new_email;
        		$new_Assistant["Photo"]=$new_photo;

        		updateAssistant($new_Assistant);
        	}
        ?>
    	</div>
    </div>
  </div>
  <script src="javascript/javascript.js"></script> 
</body>
</html>