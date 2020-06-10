 <?php

	$q = $_REQUEST["q"];
	$type = $_REQUEST["type"];

	$patients=array();

	$hint = '<table>
			  <tr>
			    <th>Patient ID</th>
			    <th>Patient Name</th>
			    <th></th>
			  </tr>';

	
	$q = strtolower($q);
	$len=strlen($q);

	$query="SELECT * FROM patients"; 

	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "portal";

	global $serverName,$userName,$password,$dbName;
	$conn = mysqli_connect( $serverName, $userName, $password, $dbName);
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $entity=array();//associative array
            foreach($row as $k=>$v)           
            {
                $entity[$k] = $row[$k];    
            }
            $patients[] = $entity;																
        }
    }
    
    mysqli_close($conn);

    if ($q != "") {
    	if($type==1){
			foreach($patients as $patient) {
			
				if ($q==substr($patient["Id"], 0, $len)) {
		      		$hint=$hint."<tr><td>".$patient["Id"]."</td><td>".$patient["Name"]."</td><td><a href='PatientInfo.php?pid=".$patient["Id"]."'><div class='myButton'>View</div></a><a href='PatientMedicalHistory.php?pid=".$patient["Id"]."'><div class='myButton'>History</div></a></td></tr>";
    			}
			}
		}
		if($type==2){
			foreach($patients as $patient) {
				$name=strtolower($patient["Name"]);
				if (stristr($q, substr($name, 0, $len))) {
		      		$hint=$hint."<tr><td>".$patient["Id"]."</td><td>".$patient["Name"]."</td><td><a href='PatientInfo.php?pid=".$patient["Id"]."'><div class='myButton'>View</div></a><a href='PatientMedicalHistory.php?pid=".$patient["Id"]."'><div class='myButton'>History</div></a></td></tr>";
    			}
			}    		
  		}
	
	}
	else{
		foreach($patients as $patient){
			$hint=$hint."<tr><td>".$patient["Id"]."</td><td>".$patient["Name"]."</td><td><a href='PatientInfo.php?pid=".$patient["Id"]."'><div class='myButton'>View</div></a><a href='PatientMedicalHistory.php?pid=".$patient["Id"]."'><div class='myButton'>History</div></a></td></tr>";
		}
	}
	$hint=$hint.'</table>';
	echo $hint;
?> 