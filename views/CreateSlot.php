<?php include 'DoctorMenu.php';
	require_once ('../controllers/SlotController.php');
	$date = $_GET["date"];
?>
  	<div class="right">
    	<div class="main">
	        
	        <form action="../controllers/SlotController.php?date=<?php echo $date; ?>" method="post" accept-charset="utf-8">
	        	<div clas="container">
	        		<div class="one">
	        			<h2>Create Slots:</h2>
	        			Date:<?php echo $date; ?>
	        		</div>
	        		<div class="two">
	        			<br><br><br><br>
	        			        <div><input type="checkbox" class="checkall" id="select_all"> Check all</div>
	        		</div>
	        		<div class="three">
	        			<pre> 



	        			</pre>
	        		</div>
	        		
	        	</div>
	        	<div class="container">
		        	<div class="one">
				        <input type="checkbox" name="Slot[]" id="Slot" class="case" value="9:00am-9:20am">9:00am-9:20am<br>
				      	<input type="checkbox" name="Slot[]" id="Slot" class="case" value="9:20am-9:40am">9:20am-9:40am<br>
				      	<input type="checkbox" name="Slot[]" id="Slot" class="case" value="9:40am-10:00am">9:40am-10:00am<br>
				      	<input type="checkbox" name="Slot[]" id="Slot" class="case" value="10:00am-10:20am">10:00am-10:20am<br>
				      	<input type="checkbox" name="Slot[]" id="Slot" class="case" value="10:20am-10:40am">10:20am-10:40am<br>
				      	<input type="checkbox" name="Slot[]" id="Slot" class="case" value="10:40am-11:00am">10:40am-11:00am<br>
				      	<input type="checkbox" name="Slot[]" id="Slot" class="case" value="11:00am-11:20am">11:00am-11:20am<br>
				      	<input type="checkbox" name="Slot[]" id="Slot" class="case" value="11:20am-11:40am">11:20am-11:40am<br>
				      	<input type="checkbox" name="Slot[]" id="Slot" class="case" value="11:40am-12:00pm">11:40am-12:00pm<br>
				      	<input type="checkbox" name="Slot[]" id="Slot" class="case" value="12:00pm-12:20pm">12:00pm-12:20pm<br>
				      	<input type="checkbox" name="Slot[]" id="Slot" class="case" value="12:20pm-12:40pm">12:20pm-12:40pm<br>
				      	<input type="checkbox" name="Slot[]" id="Slot" class="case" value="12:40pm-1:00pm">12:40pm-1:00pm<br>
		        	</div>
		        	<div class="two">
				      	<input type="checkbox" name="Slot[]" id="Slot" class="case" value="6:00pm-6:20pm">6:00pm-6:20pm<br>
				      	<input type="checkbox" name="Slot[]" id="Slot" class="case" value="6:20pm-6:40pm">6:20pm-6:40pm<br>
				      	<input type="checkbox" name="Slot[]" id="Slot" class="case" value="6:40pm-7:00pm">6:40pm-7:00pm<br>
				      	<input type="checkbox"  name="Slot[]" id="Slot" class="case" value="7:00pm-7:20pm">7:00pm-7:20pm<br>
				      	<input type="checkbox" name="Slot[]" id="Slot" class="case" value="7:20pm-7:40pm">7:20pm-7:40pm<br>
				      	<input type="checkbox" name="Slot[]" id="Slot" class="case" value="7:40pm-8:00pm">7:40pm-8:00pm<br>
				      	<input type="checkbox" name="Slot[]" id="Slot" class="case" value="8:00pm-8:20pm">8:00pm-8:20pm<br>
				      	<input type="checkbox" name="Slot[]" id="Slot" class="case" value="8:20pm-8:40pm">8:20pm-8:40pm<br>
				      	<input type="checkbox" name="Slot[]" id="Slot" class="case" value="8:40pm-9:00pm">8:40pm-9:00pm
		        	</div>
		        	<div class="three" style=color:violet>
				      	30 minutes slots:
				      	<br>
				      	<input type="checkbox" name="Slot13" class="case" value="
				      	3:00pm-3:30pm">3:00pm-3:30pm<br>
				     	<input type="checkbox" name="Slot14" class="case" value="3:30pm-4:00pm">3:30pm-4:00pm<br>
				      	<input type="checkbox" name="Slot15" class="case" value="4:00pm-4:30pm">4:00pm-4:30pm<br>
				      	<input type="checkbox" name="Slot16" class="case" value="4:30pm-5:00pm">4:30pm-5:00pm
	        		</div>
	        	</div>
	        	<br>
	        	<br>
	        	<div class="container">
	        		<div class="one">
	        			<a href="DoctorSelectDateToCreate.php">
	        				<div class="myButton">Back</div>
	        			</a>
	        		</div>
	        		<div class="two">	        			
	        			<pre> </pre>
	        		</div>
	        		<div class="three">
	        			<input type="submit" class="myButton" name="create_slots" value="Create Slots">
	        		</div>
	        	</div>
	        </form>	        
    	</div>
    </div>
  </div>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="javascript/javascript.js"></script> 
</body>
</html>