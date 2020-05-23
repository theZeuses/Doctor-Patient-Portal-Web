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
            <div class="login_header">Register here with your information. An user id will be provided.</div>


            <?php

            	$nameErr = $emailErr = $genderErr = $pnErr = $ageErr = $addErr= "";

            	$passErr="";

                $Name=$Email=$pasword=$Age=$PhoneNumber=$Address="";

                $Gender="Male";

            	if ($_SERVER["REQUEST_METHOD"] == "POST") {
            		$flag='true';
                    if (empty($_POST["Name"])) {
                        $nameErr = "Name is required";
                        $flag='false';
                    } else {
                        $Name = test_input($_POST["Name"]);
                        // check if name only contains letters and whitespace
                        if (!preg_match("/^[a-zA-Z ]*$/",$Name)) {
                          $nameErr = "Only letters and white space allowed";
                          $flag='false';
                        }
                    }
                      
                    if (empty($_POST["Email"])) {
                        $emailErr = "Email is required";
                        $flag='false';
                    } else {
                        $Email = test_input($_POST["Email"]);
                        // check if e-mail address is well-formed
                        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
                          $emailErr = "Invalid email format";
                          $flag='false';
                        }
                    }
                        

                    if (empty($_POST["Address"])) {
                        $Address = "";
                    } else {
                        $Address = test_input($_POST["Address"]);
                    }
                    if (empty($_POST["PhoneNo"])) {
                        $pnErr = "Phone number is required";
                        $flag='false';
                    } else {
                        $PhoneNumber = test_input($_POST["PhoneNo"]);
                    }
                    if (empty($_POST["Age"])) {
                        $ageErr = "Age is required";
                        $flag='false';
                    } else {
                        $Age = test_input($_POST["Age"]);
                    }
                    if (empty($_POST["Password"])) {
                        $passErr = "Password is required";
                        $flag='false';
                    }else{
                        $pasword=$_POST["Password"];
                    }


			  		if($flag=='true'){
			  			require_once '../controllers/UserController.php';
                        require_once '../controllers/PatientController.php';
  						$increment=nextPatientId();
                        $id=$increment["AUTO_INCREMENT"];
  						$user["id"]=$id;
                        $user["password"]=$pasword;
                        $user["type"]=1;
                        insertUser($user);

                        $patient["Name"]=$Name;
                        $patient["Email"]=$Email;
                        $patient["Gender"]=$Gender;
                        $patient["Age"]=$Age;
			  			$patient["PhoneNo"]=$PhoneNumber;
                        $patient["Address"]=$Address;
                        createPatient($patient);

                        header("Location:../views/CreateSuccessfull.php?id=$id");
			  		}
            	}

                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
            ?>


			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">                      
				<div class="form-group">
                    <input class="form-control valid" name="Name" placeholder="Name" type="text" value="<?php echo $Name; ?>">
                    <span class="field-validation-valid"><?php echo $nameErr; ?></span>
                </div>
                <div class="form-group">
                    <input class="form-control valid" name="Email" placeholder="E-mail" type="email" value="<?php echo $Email; ?>">
                    <span class="field-validation-valid"><?php echo $emailErr; ?></span>
                </div>
                <div class="form-group">
                    <input class="form-control" name="Password" placeholder="Password" type="password" value="<?php echo $pasword; ?>">
                    <span class="field-validation-valid"><?php echo $passErr; ?></span>
                </div>

                <div class="form-group" align="left">
                    Gender:
                    <input type="radio" name="Gender"
                    <?php if ($Gender=="Female") echo "checked";?>
                    value="Female">Female
                    <input type="radio" name="Gender"
                    <?php if ( $Gender=="Male") echo "checked";?>
                    value="Male">Male
                    <input type="radio" name="Gender"
                    <?php if ($Gender=="Other") echo "checked";?>
                    value="Other">Other
                    <span class="field-validation-valid"><?php echo $genderErr; ?></span>
                </div>
                <div class="form-group">
                    <input class="form-control valid" name="Age" placeholder="Age" type="number" value="<?php echo $Age; ?>">
                    <span class="field-validation-valid"><?php echo $ageErr; ?></span>
                </div>
                <div class="form-group">
                    <input class="form-control valid" name="PhoneNo" placeholder="Phone Number(after +880)" type="number" value="<?php echo $PhoneNumber; ?>">
                    <span class="field-validation-valid"><?php echo $pnErr; ?></span>
                </div>
                <div class="form-group">
                    <input class="form-control valid" name="Address" placeholder="Address" type="textarea" value="<?php echo $Address; ?>">
                    <span class="field-validation-valid"><?php echo $addErr; ?></span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary p-lg-left-right"> Register </button>
                </div>
                <div class="register"><a href="login.php">Already Have an account? Log In</a></div>
			</form>
        </div>
    </div>
</body>
</html>