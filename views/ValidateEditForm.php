<?php
			// define variables and set to empty values
			$nameErr = $emailErr = $genderErr = $pnErr = $ageErr = "";
			

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$flag='true';
			  if (empty($_POST["new_name"])) {
			    $nameErr = "Name is required";
			    $flag='false';
			  } else {
			    $new_name = test_input($_POST["new_name"]);
			    // check if name only contains letters and whitespace
			    if (!preg_match("/^[a-zA-Z ]*$/",$new_name)) {
			      $nameErr = "Only letters and white space allowed";
			      $flag='false';
			    }
			  }
			  
			  if (empty($_POST["new_email"])) {
			    $emailErr = "Email is required";
			    $flag='false';
			  } else {
			    $new_email = test_input($_POST["new_email"]);
			    // check if e-mail address is well-formed
			    if (!filter_var($new_email, FILTER_VALIDATE_EMAIL)) {
			      $emailErr = "Invalid email format";
			      $flag='false';
			    }
			  }
			    

			  if (empty($_POST["new_addr"])) {
			    $new_addr = "";
			  } else {
			    $new_addr = test_input($_POST["new_addr"]);
			  }

			  if (empty($_POST["new_sp"])) {
			    $new_sp = "";
			  } else {
			    $new_sp = test_input($_POST["new_sp"]);
			  }

			  if (empty($_POST["new_gender"])) {
			    $genderErr = "Gender is required";
			    $flag='false';
			  } else {
			    $new_gender = test_input($_POST["new_gender"]);
			  }
			  if (empty($_POST["new_pn"])) {
			    $pnErr = "Phone number is required";
			    $flag='false';
			  } else {
			    $new_pn = test_input($_POST["new_pn"]);
			  }
			  if (empty($_POST["new_age"])) {
			    $ageErr = "Age is required";
			    $flag='false';
			  } else {
			    $new_age = test_input($_POST["new_age"]);
			  }
			  if (!empty( $_FILES["new_photo"]["name"] ) && $flag=='true') {			  	
				$target_dir = "../storage/images/users/";
				$target_file = $target_dir . basename($_FILES["new_photo"]["name"]);
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

				// Check if image file is a actual image or fake image
				$check = getimagesize($_FILES["new_photo"]["tmp_name"]);
				if($check !== false) {
				    $uploadOk = 1;
				} else {
				    $uploadOk = 0;
				}

				// Check if file already exists
				if (file_exists($target_file)) {
				    $uploadOk = 0;
				}
				// Check file size
				if ($_FILES["new_photo"]["size"] > 500000) {
				    $uploadOk = 0;
				}
				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
				    $uploadOk = 0;
				}
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {

				} 
				// if everything is ok, try to upload file
				else {
				    if (copy($_FILES["new_photo"]["tmp_name"], $target_file)) {
				        /*echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

				        echo "<img src=".$target_file.">";*/

				        $new_photo=$target_file;
				    } else {
				       /* echo "Sorry, there was an error uploading your file.";*/
				       
				    }
				}
			    
			  }
			  
			}

			function test_input($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
			}
			?>