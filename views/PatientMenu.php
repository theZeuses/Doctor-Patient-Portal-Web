<?php include 'header.php';?>
<div class="container"> 
    <div class="left">
    	<div class="sidenav">
        <button class="dropdown-btn">Slots
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <a href="BookSlot.php?date=<?php echo date("Y-m-d");?>">Book Slots</a>
          <a href="CancelSlot.php">Cancel Slots</a>
        </div>
        <a href="MedicalHistory.php?pid=<?php echo $id; ?>">Medical History</a>
        <button class="dropdown-btn">Profile
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <a href="PatientViewProfile.php">View Profile</a>
          <a href="PatientEditProfile.php">Edit Profile</a>
          <a href="PatientChangePassword.php">Change Password</a>
        </div>
        <a href="login.php">Log Out</a>
      </div>
    </div>