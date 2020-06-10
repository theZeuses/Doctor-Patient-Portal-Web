<?php include 'PatientMenu.php';
	require_once '../controllers/HistoryController.php';
	$pid=$_GET["pid"];
	$hists=getHistoryByPid($pid);
?>

    <div class="right">
      <div class="main">
        <h2>Medical History:</h3>
           <div class="container">
           		<div class="one">
			        <?php
			        	if(count($hists)!="0"){
			        		$code="";
			        		$code=$code.'Date: <select onchange="lister(this.value,'.$pid.');">';
			        		$code=$code.'<option value="p" selected>Select Date</option>';
			        		foreach($hists as $hist){
			        			$code=$code.'<option value="'.$hist["date"].'">'.$hist["date"].'</option>';
			        		}
			        		$code=$code.'</select>';
			        		echo $code;
			        	}
			        	else{
			        		echo "<pre> </pre>";
			        	}
			        ?>
           		</div>
           		<div class="two">
           			<?php
			        	if(count($hists)=="0"){
			        		echo "<br>No History Added Yet.";
			        	}
			        	else{
			        		echo "<pre> </pre>";
			        	}
			        ?>
           		</div>
           </div>

         
        <div id="txtHint">
        </div>
        </div>
    </div>   
  </div>
  <script>
      function lister(str,pid) {
        var xhttp;
        if (str=="p") { 
          document.getElementById("txtHint").innerHTML = "No Data Found";
          return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "HistoryLister.php?q="+str+"&pid="+pid, true);
        xhttp.send();   
      }
    </script>
  <script src="javascript/javascript.js"></script> 
</body>
</html>