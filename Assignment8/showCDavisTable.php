<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Show cDavisPlayersTable</title>
</head>
<body>
<p>
<?php 
 
$conn  = mysql_connect("cis1110.db.2177912.hostedresource.com", "cis1110", "Eagles#1") or die(mysql_error());
$select = mysql_select_db("cis1110", $conn);
$sql = "SELECT * FROM  cDavisPlayersTable";
$result = mysql_query($sql) or die(mysql_error());
echo "cDavisPlayersTable";

while ($row = mysql_fetch_assoc($result)){

  foreach($row as $key=>$value){
    print "$key: $value<br />\n";
  } // end foreach
  print "<br />\n";
  
} // end while
$sql_1 = "SELECT * FROM  cDavisTeamTable";
$result_1 = mysql_query($sql_1) or die(mysql_error());
echo "cDavisTeamTable";
 print "<br />\n";
while ($row = mysql_fetch_assoc($result_1)){

  foreach($row as $key=>$value){
    print "$key: $value<br />\n";
  } // end foreach
  print "<br />\n";
  
}
$sql_2 = "SELECT * FROM  cDavisPlayers_With_Contracts";
$result_2 = mysql_query($sql_2) or die(mysql_error());
echo "cDavisPlayers_With_Contracts";
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

 



 



