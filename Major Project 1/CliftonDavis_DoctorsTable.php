<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Major Project Doctor's Table</title>
	
	<meta charset="UTF-8">
	<style>
		
	</style>
	</head>
	<body>
		<h2>Doctor's Table</h2>
		<?php
require_once ('CdavisMajor1connectdata.php');

$patient_id = filter_input(INPUT_POST, "$patient_id");
$patient_id = mysql_real_escape_string($$patient_id);
$sql = "SELECT doctor.*
					FROM doctor_Table, client_Table
					WHERE client_Table.$patient_id = $$patient_id AND
							 doctor_Table.doctor_Specialty LIKE CONCAT('%', client_Table.patient_Illness, '%')";
$result = mysql_query($sql,$db) or die ("<h3> no record available</h3>" . mysql_error());

	if(mysql_num_rows($result)){
		print"<form method = 'post' action = 'pUpdate.php'>";
		print"<table border='3' width='650' align='center' cellpadding='3' cellspacing='0'>";
		print "<caption> doctor_Table";
		print"<tr>";
while ($field = mysql_fetch_field($result)){
	   print "<th>$field->name</th>";
}//END WHILE
       print "</tr>";
while ($row = mysql_fetch_assoc($result)){
$id = $row["doctor_Id"];
	   print "<tr>";
foreach($row as $col=>$val){
       print "<td>$val</td>";
	  }
	   print "</tr>";
	}
print<<<HERE
<tr><td colspan = '4'>
<h2>choose dr</h2>
<label for='doctor_Id'>Enter Doctor ID:</label><input type = 'text' name = 'doctor_Id' required = 'required'>
<input type = 'submit' value = 'SUBMIT'>
<input type = 'hidden' name = '$patient_id' value = '$$patient_id'>
<input type = 'hidden' name = 'id' value = '$id'>
</td></tr>
</table>
</form>

HERE;
} else {
print<<<HERE

<h3>Patient not in System</h3>
<form method = 'post' action = 'index.php'>
<input type = 'submit' value = 'Patient Table'>
</form>

HERE;
}

 mysql_close();
 
 ?>

 	</body>
</html>