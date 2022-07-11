<!DOCTYPE html>
<body>


<?php

$patientID = $_POST['patientID'];
$patientFirstName = $_POST['patientFirstName'];
$patientLastName = $_POST['patientLastName'];
$patientPhone = $_POST['patientPhone'];
$patientAddress = $_POST['patientAddress'];
$patientInsurance = $_POST['patientInsurance'];
$patientIllness = $_POST['patientIllness'];
$doctorName = $_POST['doctorName'];
$doctorID = $_POST['doctorID'];


$conn  = mysql_connect("cis1110.db.2177912.hostedresource.com", "cis1110", "Eagles#1", "cis1110") or die(mysql_error());
//$select = mysql_select_db("cis1110", $conn);

//$query = "INSERT INTO cDavis_PatientRecords (patientID, patientFirstName, PatientLastName, patientPhone, " .
			//"patientAddress, patientInsurance, patientIllness, doctorName, doctorID)" .
			//"VALUES ($patientID, '$patientFirstName', '$PatientLastName', '$patientPhone', " .
			//"'$patientAddress', '$patientInsurance', '$patientIllness', '$doctorName', $doctorID)";

mysql_query($conn,"INSERT INTO cDavis_PatientRecords (patientID, patientFirstName, PatientLastName, patientPhone,
				patientAddress, patientInsurance, patientIllness, doctorName, doctorID)); 
			VALUES ('$_POST[patientID]', '$_POST[patientFirstName]', '$_POST[PatientLastName]', '$_POST[patientPhone]', 
			'$_POST[patientAddress]', '$_POST[patientInsurance]', '$_POST[patientIllness]', '$_POST[doctorName]', '$_POST[doctorID]')";			
			
//$sql = "SELECT * FROM  cDavis_PatientRecords";
//$result = mysql_query($sql) or die(mysql_error());
//echo "cDavis_PatientRecords";

//while ($row = mysql_fetch_assoc($result)){

 // foreach($row as $key=>$value){
   // print "$key: $value<br />\n";
  } // end foreach
 // print "<br />\n";
	
		//mysql_close($connect);

}
echo $_POST["patientID"]; <br>
echo $_POST["patientFirstName"]; <br>
echo $_POST["PatientLastName"]; <br>
echo $_POST["patientPhone"]; <br>
echo $_POST["patientAddress"]; <br>
echo $_POST["patientInsurance"]; <br>
echo $_POST["patientIllness"]; <br>
echo $_POST["doctorName"]; <br>
echo $_POST["doctorID"]; <br>



?>






</body>
</html>
