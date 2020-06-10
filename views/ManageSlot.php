<?php include 'DoctorMenu.php'; 
  require_once '../controllers/SlotController.php';
  $sid=$_GET["sid"];
  $slot=getSlotById($sid);
?>
		<div class="right">
    	<div class="main" style=color:black>
    		<div class="center">
        		<h3 style=color:blue>Slot</h3>
        		<h4 style=color:blue>ID</h4><h4><?php echo $slot["id"]; ?></h4>
        		<h4 style=color:blue>Time</h4><h4><?php echo $slot["time"]; ?></h4>
        		<h4 style=color:blue>Date</h4><h4><?php echo $slot["date"]; ?></h4>
        		<h4 style=color:blue>Price</h4><h4><?php echo $slot["price"]; ?></h4>
        		<h4 style=color:blue>Availability</h4><h4><?php echo $slot["availability"]; ?></h4>
                <br>
                <a href="SelectToManageSlot.php?date=<?php echo $slot["date"]; ?>"><div class="myButton">Back</div></a> 
                <?php
                	if($slot["pid"]!=0){
                		session_start();
                		$_SESSION["stored_sid"]=$sid;
                		echo '<a href="PatientInfo.php?pid='.$slot["pid"].'&type=x"><div class="myButton">Bookee</div></a>';
                	}
                	else{
                		$update="";               		
                		if($slot["availability"]=="Available"){
                			$update="Unavailable";
                		}
                		else{
                			$update="Available";
                		}
                		echo '<a href="UpdateSlotAvailability.php?sid='.$slot["id"].'&update='.$update.'"><div class="myButton">Make '.$update.'</div></a> ';
                	}
                ?>     		
                
                
	        </div>
    	</div>
    </div>
  </div>
  <script src="javascript/javascript.js"></script> 
</body>
</html>