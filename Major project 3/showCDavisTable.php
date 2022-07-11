<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Show Tables</title>
</head>
<body>
<p>
<?php 
 
$conn  = mysql_connect("cis1110.db.2177912.hostedresource.com", "cis1110", "Eagles#1") or die(mysql_error());
$select = mysql_select_db("cis1110", $conn);
$sql = "SELECT * FROM  cDavis_PatientRecords";
$result = mysql_query($sql) or die(mysql_error());
echo "cDavis_PatientRecords";

while ($row = mysql_fetch_assoc($result)){

  foreach($row as $key=>$value){
    print "$key: $value<br />\n";
  } // end foreach
  print "<br />\n";
  
} // end while
$sql_1 = "SELECT * FROM   cDavis_HospitalEmployee_Information";
$result_1 = mysql_query($sql_1) or die(mysql_error());
echo " cDavis_HospitalEmployee_Information";
 print "<br />\n";
while ($row = mysql_fetch_assoc($result_1)){

  foreach($row as $key=>$value){
    print "$key: $value<br />\n";
  } // end foreach
  print "<br />\n";
  
}
$sql_2 = "SELECT * FROM  cDavis_DoctorInformation";
$result_2 = mysql_query($sql_2) or die(mysql_error());
echo "cDavis_DoctorInformation";
 print "<br />\n";
while ($row = mysql_fetch_assoc($result_2)){

  foreach($row as $key=>$value){
    print "$key: $value<br />\n";
  } // end foreach
  print "<br />\n";
  
}
$sql_3 = "SELECT * FROM  cDavis_NurseInformation";
$result_3 = mysql_query($sql_2) or die(mysql_error());
echo "cDavis_NurseInformation";
 print "<br />\n";
while ($row = mysql_fetch_assoc($result_2)){

  foreach($row as $key=>$value){
    print "$key: $value<br />\n";
  } // end foreach
  print "<br />\n";
  
}
$sql_4 = "SELECT * FROM   cDavis_NurseAidInformation";
$result_4 = mysql_query($sql_2) or die(mysql_error());
echo " cDavis_NurseAidInformation";
 print "<br />\n";
while ($row = mysql_fetch_assoc($result_2)){

  foreach($row as $key=>$value){
    print "$key: $value<br />\n";
  } // end foreach
  print "<br />\n";
  
}
$sql_5 = "SELECT * FROM  cDavis_BirthingRoom";
$result_5 = mysql_query($sql_2) or die(mysql_error());
echo "cDavis_BirthingRoom";
 print "<br />\n";
while ($row = mysql_fetch_assoc($result_2)){

  foreach($row as $key=>$value){
    print "$key: $value<br />\n";
  } // end foreach
  print "<br />\n";
  
}
$sql_6 = "SELECT * FROM cDavis_HospitalRoom";
$result_6 = mysql_query($sql_2) or die(mysql_error());
echo "cDavis_HospitalRoom";
 print "<br />\n";
while ($row = mysql_fetch_assoc($result_2)){

  foreach($row as $key=>$value){
    print "$key: $value<br />\n";
  } // end foreach
  print "<br />\n";
  
}

?>
</p>
</body>
</html>

 



 



