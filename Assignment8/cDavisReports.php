
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php include "db_library.php"; ?>
<title>Add a Record</title>
</head>
<body>
<h2>Add Record</h2>
<?php 

$dbConn = connectToDb();


$sql = "SELECT DISTINCT cDavisPlayersTable.team_ID, cDavisPlayersTable.pHomeCity, cDavisPlayers_With_Contracts.salary
 FROM cDavisPlayersTable,  cDavisPlayers_With_Contracts
 WHERE cDavisPlayersTable.team_ID = 011 ";

$result = mysql_query($sql) or die(mysql_error());

while ($row = mysql_fetch_assoc($result)){

  foreach($row as $key=>$value){
    print "$key: $value<br />\n";
  } // end foreach
  print "<br />\n";
  
}


?>

</body>
</html> 