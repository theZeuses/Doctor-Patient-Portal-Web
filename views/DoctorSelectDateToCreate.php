<?php include 'DoctorMenu.php';
  require_once ('../controllers/SlotController.php');
?>
  	<div class="right">
    	<div class="main">

        <?php
          $date="";
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["date_of_slot"])) {
              $code="this.parentElement.style.display='none';";
                echo '<br><div class="alert">
                <div class="closebtn" onclick="'.$code.'">&times;</div> 
                <strong>Invalid Date!</strong> 
              </div>';
            } else {
              $date=$_POST["date_of_slot"];
              $slot=getSlotBydate($date);
              if(count($slot)==0){
                header("Location:CreateSlot.php?date=$date");
              }
              else{
                $code="this.parentElement.style.display='none';";
                echo '<br><div class="alert">
                <div class="closebtn" onclick="'.$code.'">&times;</div> 
                <strong>Slot For This Day Already Created!</strong>
              </div>';
              }
            }
          }
        ?>


	        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" accept-charset="utf-8">         
	        <div class="center">
	        	<p><h3>Select Date to Create Slots of:</h3>
              <input type="date" name="date_of_slot" value="<?php echo date("Y-m-d");?>">
	        	<input type="submit" class="myButton" value="Create"></p>
	        </div>
          </form>   
          <br>
          <br>
          <br>
    	</div>
    </div>
  </div>
  <script src="javascript/javascript.js"></script> 
</body>
</html>