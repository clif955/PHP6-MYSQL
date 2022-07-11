<?php
// Make a MySQL Connection
$dbhost = "cis1110.db.2177912.hostedresource.com";
 $dbuser = "cis1110";
 $dbpassword = "Eagles#1";
 $dbdatabase = "cis1110"; 
 
mysql_connect("cis1110.db.2177912.hostedresource.com", "cis1110", "Eagles#1") or die(mysql_error());
mysql_select_db("cis1110") or die(mysql_error());

// Create a MySQL table in the selected database
$sql = "DROP TABLE IF EXISTS cDavisTeamTable";
mysql_query($sql);
mysql_query("CREATE TABLE   cDavisTeamTable(
					team_ID varchar(3) NOT NULL  PRIMARY KEY,
					pID varchar(20) NOT NULL UNIQUE
)")
or die(mysql_error());  

echo "Table Created!";

?> 