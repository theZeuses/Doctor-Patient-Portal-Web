<?php
	require_once '../controllers/HistoryController.php';
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$flag=false;
		$pid=$_POST["pid"];
		if (!empty( $_FILES["new_photo"]["name"] )) {			  	
			$target_dir = "../storage/images/histories/";
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
			        $flag=true;

			        $new_photo=$target_file;
			    } else {
			       /* echo "Sorry, there was an error uploading your file.";*/
			       
			    }
			}
		}

		if($flag==true){
			insertHistory($pid,$new_photo);
		}
		else{
			header("Location:InsertMedicalHistory.php?pid=$pid");
			exit();
		}
	}
?>