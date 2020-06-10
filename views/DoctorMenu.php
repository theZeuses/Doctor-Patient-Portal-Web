<?php include 'header.php';?>
<div class="container"> 
    <div class="left">
    	<div class="sidenav">
        <button class="dropdown-btn">Slots
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <a href="DoctorSelectDateToCreate.php">Create Slots</a>
          <a href="SelectToManageSlot.php?date=<?php echo date("Y-m-d");?>">Manage Slots</a>
        </div>
        <a href="AllPatient.php">Patient's Medical History</a>
        <button class="dropdown-btn">Profile
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <a href="DoctorViewProfile.php">View Profile</a>
          <a href="DoctorEditProfile.php">Edit Profile</a>
          <a href="DoctorChangePassword.php">Change Password</a>
        </div>
        <a href="login.php">Log Out</a>
      </div>
    </div>