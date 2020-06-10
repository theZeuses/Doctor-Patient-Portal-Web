<?php
  session_start();
  $id=$_SESSION["logged_in_id"];
  require_once '../controllers/UserController.php';
  $user=getUserById($id);
  $type=$user["type"];
  if($type==1){
    $link="PatientViewProfile.php";
  }
  elseif($type==2){
    $link="DoctorViewProfile.php";
  }
  else{
    $link="AssistantViewProfile.php";
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>	
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/popup.css">
    <link rel="stylesheet" type="text/css" href="styles/PatientPortal.css">
</head>
<body>
	<div class="header">
    <div class="container">
      <div class="left">
        <div class="container">
          <div class="left">
            <img src="../storage/images/logo.jpeg" width=80px height=80px class="image">
          </div>
          <div class="right">
            <h3>Doctor-Patient <br> Portal</h3>
          </div>
        </div>
      </div>
      <div class="right">
        <div class="topnav">
          <p>         
          <a href="login.php" class="fa fa-sign-out" style="font-size:24px"></a>
          <a href="<?php echo $link;?>" class="fa fa-user" style="font-size:24px"></a></p>
          <a href="#" class="fa fa-bell" style="font-size:24px"></a>
        </div>
      </div>
    </div>
  </div>
