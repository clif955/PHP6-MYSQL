<?php

$employeeID = $_POST['employeeID'];
$employeeFirstName = $_POST['employeeFirstName'];
$employeeLastName = $_POST['employeeLastName'];
$employeePhone = $_POST['employeePhone'];
$employeeAddress = $_POST['employeeAddress'];
$employeeInsurance = $_POST['employeeInsurance'];
$employeeJobTitle = $_POST['employeeJobTitle'];
$employeeSpecialities = $_POST['employeeSpecialities'];
$employeeDegrees = $_POST['employeeDegrees'];


$connect = mysql_connect('cis1110.db.2177912.hostedresource.com', 'cis1110', 'Eagles#1','cis1110') or die(mysql_error());

$query = "INSERT INTO cDavis_HospitalEmployee_Information (employeeID, employeeFirstName, employeeLastName, employeePhone, " .
			"employeeAddress, employeeInsurance, employeeJobTitle, employeeSpecialities, employeeDegrees)" .
			"VALUES ('$employeeID', '$employeeFirstName', '$employeeLastName', '$employeePhone', " .
			"'$employeeAddress', '$employeeInsurance', '$employeeJobTitle', '$employeeSpecialities', '$employeeDegrees')";


$result = mysql_query($connect, $query) 
			or die ('Error querying database');
	
		mysql_close($connect);














?>