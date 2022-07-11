<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EM"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">

<head>
<title> Clients and Doctors Table</title>
</head>

<body>
<h1>A list of Patients Illness and Assigned Doctors</h1><br /><br /><br /><br />

<?php
$dbhost = "cis1110.db.2177912.hostedresource.com";
$dbuser = "cis1110";
$dbpassword = "Eagles#1";
$dbdatabase = "cis1110";  //yes, this is the wrong class name, but use it anyway
$db = mysql_connect($dbhost, $dbuser, $dbpassword) or die(mysql_error());
mysql_select_db($dbdatabase, $db);

@mysql_select_db("cis1110", $conn);// connect to database 

$sql = "SELECT * FROM cliftondavis_patient_Table";
$result = mysql_query($sql, $conn) or die(mysql_error);

print "<table border =\"1\">\n";

print "<tr>\n":
while ($field = mysql_fetch_field($result)){
	print " <th>$field->name</th>\n";
	}
	print "</tr>\n\n";
	
	while ($row = mysql_fetch_assoc($result)){
		print "<tr>\n";
		
		foreach ($row as $col=>$val){
			print " <td>$val</td>\n";
		
		print "</tr>\n\n";
		}
		print "</table>\n";
		?>
		</body>
		</html>
		
			








