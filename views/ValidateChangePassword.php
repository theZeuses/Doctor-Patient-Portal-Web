<?php
		$cpass=$npass=$rpass="";
		$cpassErr=$npassErr=$rpassErr="";
		$val=FALSE;
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$val=TRUE;
	        if (empty($_POST["cpass"])) {
		        $cpassErr = "This is required";
		        $val=FALSE;
	        } 
	        else {
	            $cpass = test_input($_POST["cpass"]);
	        }
	        if (empty($_POST["npass"])) {
		        $npassErr = "This is required";
		        $val=FALSE;
	        }
	        else {
	            $npass = test_input($_POST["npass"]);
	        }
	        if (empty($_POST["rpass"])) {
		        $rpassErr = "This is required";
		        $val=FALSE;
	        }
	        else {
	            $rpass = test_input($_POST["rpass"]);
	        }
	        if($_POST["cpass"]!=$user["password"]){
	        	$cpassErr = "Incorrect Password";
		        $val=FALSE;
	        }
	        if($_POST["npass"]!=$_POST["rpass"]){
	        	$rpassErr = "Does not Match";
		        $val=FALSE;
	        }
	        
		}
		function test_input($data) {
		    $data = trim($data);
		    $data = stripslashes($data);
		    $data = htmlspecialchars($data);
		    return $data;
	    }
	    if($val==true){
	    	$user["password"]=$npass;
	    	updateUser($user);
	    	$code="this.parentElement.style.display='none';";
                echo '<br><div class="alert">
                <div class="closebtn" onclick="'.$code.'">&times;</div> 
                <strong>Changing Password is Successfull!</strong> 
              </div>';
	    }	
	?>