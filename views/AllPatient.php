<?php include 'DoctorMenu.php';
	require_once '../controllers/PatientController.php';
	$patients=getAllPatients();
?>
  	<div class="right">
    	<div class="main" style=color:black>
    		<h2>All Patient:</h2>  		
			<div style="height:300px; width:100%; overflow:auto;" id="txtHint">
			  <table>
			  <tr>
			    <th>Patient ID</th>
			    <th>Patient Name</th>
			    <th></th>
			  </tr>
			  <?php
			  	foreach($patients as $patient){
			  		echo "<tr>";
			  		echo "<td>";
			  		echo $patient["Id"];
			  		echo "</td>";
			  		echo "<td>";
			  		echo $patient["Name"];
			  		echo "</td>";
			  		echo "<td><a href='PatientInfo.php?pid=".$patient["Id"]."&type=y'>";
			  		echo "<div class='myButton'>View</div></a>";
			  		echo "<a href='PatientMedicalHistory.php?pid=".$patient["Id"]."&type=z'>";
			  		echo "<div class='myButton'>History</div></a>";
			  		echo "</td>";
			  		echo "</tr>";
			  	}
			  ?>
			</table>

		</div>
    		
		<div class="container">
			<div class="one">
				<h4>Search by ID:</h4><br>
				<input type="text" onkeyup="lister(this.value,1);">
			</div>
			<div class="two">
				<h4>Or Search by Name:</h4><br> 
				<input type="text" onkeyup="lister(this.value,2);">
			</div>
		</div>
    	
    </div>
  </div>
</div>
  <script>
      function lister(str,type) {
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "PatientLister.php?q="+str+"&type="+type, true);
        xhttp.send();   
      }
    </script>
  <script src="javascript/javascript.js"></script> 
</body>
</html>