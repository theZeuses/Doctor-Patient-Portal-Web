<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="styles/LoginRegister.css">
</head>
<body>
    <div class="text-center">
        <div class="login-form" style="top: 35.5px;">
            <div class="row">
                <div class="col-sm-4 col-xs-12 text-center">
                    <img src="../storage/images/logo.jpeg" height="92">
                </div>

                <div class="col-sm-8 col-xs-12">
                    <blockquote>
                        <p class="project_title"><h2>DOCTOR-PATIENT PORTAL</h2></p>
                        <small class="project_slogan">We care for you.</small>
                    </blockquote>
                </div>
            </div>
        	<br>
            <div class="login_header">Sign in with your User Id and Password.</div>


            <?php

            	$idErr=$passErr=$loginErr="";

            	$id=$pasword="";

            	if ($_SERVER["REQUEST_METHOD"] == "POST") {
            		$flag=true;
            		if (empty($_POST["UserId"])) {
					    $idErr = "User ID is required";
					    $flag=false;
			  		}else{
			  			$id=$_POST["UserId"];
			  		}
			  		if (empty($_POST["Password"])) {
					    $passErr = "Password is required";
					    $flag=false;
			  		}else{
			  			$pasword=$_POST["Password"];
			  		}

			  		if($flag==true){
			  			require_once '../controllers/UserController.php';
  						$user=validateUser($id,$pasword);
  						$type=$user["type"];
			  			if($type!=0){
			  				session_start();
			  				$_SESSION["logged_in_id"]=$id;
			  				
						  	if($type==1){
						    	$link="CancelSlot.php";
						  	}
						  	elseif($type==2){
						    	$link="DoctorSelectDateToCreate.php";
						  	}
						  	else{
						    	$link="AllPatient_Assistant.php";
						  	}
						  	header("Location:$link");
						  	exit();
			  			}
			  			else{
			  				$loginErr="Invalid Credentials.";
			  			}
			  		}
            	}
            ?>


			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">                      
				<div class="form-group">
                    <input class="form-control valid" name="UserId" placeholder="User ID" type="text" value="<?php echo $id; ?>">
                    <span class="field-validation-valid"><?php echo $idErr; ?></span>
                </div>
                <div class="form-group">
                    <input class="form-control" name="Password" placeholder="Password" type="password" value="<?php echo $pasword; ?>">
                    <span class="field-validation-valid"><?php echo $passErr; ?></span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary p-lg-left-right"> Log In </button>
                    <span class="field-validation-valid"><?php echo $loginErr; ?></span>
                </div>
                <div class="register"><a href="Registration.php">New Here?</a></div>
                <div class="login_forgotpassword"><a href="#">Cannot access your account?</a></div>
			</form>
        </div>
    </div>
</body>
</html>