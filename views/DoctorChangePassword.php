<?php include 'DoctorMenu.php';
	require_once '../controllers/UserController.php';
	$user=getUserById($id);
?>
	<div class="right">
    	<div class="main" style=color:black>
    		<?php include 'ValidateChangePassword.php';?>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					  	
			  	<h2>Change Password</h2>
			  	<div class="container">
			  		<div class="one">
			  			Current Password:<br><br>
			  			New Password:<br><br>
			  			Retype Password:
			  		</div>
			  		<div class="two">
			  			<input type="password" id="cpass" name="cpass"><br><span>* <?php echo $cpassErr;?></span><br>
						<input type="password" id="npass" name="npass"><br><span>* <?php echo $npassErr;?></span><br>
						<input type="password" id="rpass" name="rpass"><br><span>* <?php echo $rpassErr;?></span><br>
					</div>
					<div class="three">

					</div>
				</div>
				<div class="container">
					<div class="one">
						<pre> </pre>
					</div>
					<div class="two">
						<pre> </pre>
					</div>
					<div class="three">
						<input type="submit" class="myButton" value="Update">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
	<script src="javascript/javascript.js"></script> 
</body>
</html>