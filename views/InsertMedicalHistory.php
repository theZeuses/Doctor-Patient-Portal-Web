<?php include 'AssistantMenu.php';
	$pid=$_GET["pid"];
	$type=$_GET["type"];
	if($type==1){
		$backLink="AllPatient_Assistant.php";		
	}
	else{
		$backLink="PatientInfo_Assistant.php?pid=".$pid;
	}
?>
		

		


		<div class="right">
    		<div class="main" style=color:black>

				<form method="post" action="uploadHistory.php" enctype="multipart/form-data" class="form-horizontal form-material">
					<div class="center">
						<h4>Insert Today's History</h4> 
						<h4>ID:<?php echo $pid; ?></h4>
						<input type="file" name="new_photo">
						<input type="hidden" name="pid" value="<?php echo $pid?>" >
						<input type="submit" class="myButton" value="Insert History">
						
					</div>

				</form>

				<a href="<?php echo $backLink; ?>"><div class="myButton">Back</div></a>
			</div>
		</div>
	</div>
	<script src="javascript/javascript.js"></script> 
</body>
</html>