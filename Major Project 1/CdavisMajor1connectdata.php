

<?php
$dbhost = "cis1110.db.2177912.hostedresource.com";
$dbuser = "cis1110";
$dbpassword = "Eagles#1";
$dbdatabase = "cis1110";  //yes, this is the wrong class name, but use it anyway
$db = mysql_connect($dbhost, $dbuser, $dbpassword) or die(mysql_error());
mysql_select_db($dbdatabase, $db);

@mysql_select_db("cis1110", $con);// connect to database 
//$sql = explode(";",file_get_contents('CliftonDavis_Patients_Doctors.sql'));
//foreach($sql as $query)  
//mysql_query($query);
$sql = "SELECT * FROM cliftondavis_patient_Table";
$result = mysql_query($sql, $conn); //or die(mysql_error);

print "<table border = \"1\">\n";

//get field names
print "<tr>\n";
while ($field = mysql_fetch_field($result)){
	print " <th>$field->name</th>\n";
	} //end while
	print "</tr>\n\n";
	// get row data as an associative array
	while ($row = mysql_fetch_assoc($result)){
		print "<tr>\n";
		
		foreach ($row as $col=>$val){
			print " <td>$val</td>\n";
		} // end foreach
		print "</tr>\n\n";
		} // end while
		print "</table>\n";
	


 //input_post data from form
$patientId = filter_input(INPUT_POST, "patientId");
$patientIllness = filter_input(INPUT_POST, "patientIllness"); 
$doctorId = filter_input(INPUT_POST, "doctorId");
$patientFirstName = filter_input(INPUT_POST, "patientFirstName");
$patientLastName = filter_input(INPUT_POST, "patientLastName");
//cleanup
$patientId = mysql_real_escape_string(patientId);
$patientIllness = mysql_real_escape_string(patientIllness);
$doctorId = mysql_real_escape_string(doctorId);
$patientFirstName = mysql_real_escape_string($patientFirstName);
$patientLastName = mysql_real_escape_string($patientLastName);
/*
if ($patient_Illness = "fever") {
	print "General Practitioner"; 
	} else {
	if ($patient_Illness = "Internal Breeding") 
	print "Gastroenterology"; 
	} else {
	if ($patient_Illness = "Skin Rash") 
	print "Dermatology"; 
	} else {
	if ($patient_Illness = "Tumors") 
	print "Gynecologic Oncology";
	} else {
	if ($patient_Illness = "Pancreas") 
	print "Endocrinology";
	} 


print "table";
$sql = explode(";",file_get_contents('CliftonDavis_Patients.sql'));
foreach($sql as $query) 
mysql_query($query);

   
    if (!$db)
    {
    die('Could not connect: ' . mysql_error());
    }
    else
    {
    // echo('Connected with Mysql');
    }
    
    if (isset($_POST['Submit']))
    {
    $sql= "INSERT INTO CliftonDavis_Patients" (patient_id, patient_FirstName, patient_LastName, patient_Illness, doctor_Id)
	VALUES "('$_POST[patient_id]','$_POST[patient_FirstName]','$_POST[patient_LastName]','$_POST[patient_Illness]','$_POST[doctor_Id]')";
    @mysql_query($sql,$con);



mysql_close();
}
*/
//mysql_close();

?>